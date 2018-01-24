<?php 
$bdd = (new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', 'root'));
require'gestionsallemodel.php';
require'gestionsalleview.php';
$arrayData=getCatalogue($bdd);


for ($i=0;$i<count($arrayData['ID']);$i++){
$cat='cat'.$arrayData['ID'][$i];
$abc = $_POST[$cat];
echo $abc;}
 
sensorList( $arrayData);

if (isset($_POST['ajout_capteur'])){
    // on test chaque chekbox pour savoir quels capteurs on doit ajouter
    for ($i=0;$i<count($arrayData['ID']);$i++){
        $value='checkbox'.$arrayData['ID'][$i];
        if (isset($_POST[$value])){
           // echo( $arrayData['product_name'][$i].'est checked');
            $cat='cat'.$arrayData['ID'][$i];
            
            $id_type=$arrayData['ID_type'][$i];
            $abc = $_POST[$cat];
            
            $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES('salon','.$abc.','.$id_type.','155') ");
            $requeteajoutercapteurs->execute() ;
            
            
        }
    }
}


?> 