<?php
require('../model/gestionsallemodel.php');

if (isset($_POST['salles'])) {
    $choix=$_POST['salles'];
    
}
else {
    $choix='';
}

if (isset($_POST['modifsalle'])) {
    $choix_modifsalle=$_POST['modifsalle'];  }
    else {
        $choix_modifsalle=''; }

        
        
        
$arrayData=getCatalogue($bdd);
        
        

            
            
            
if (isset($_POST['valider_ajout'])){
                
// on test chaque chekbox pour savoir quels capteurs on doit ajouter
    for ($i=0;$i<count($arrayData['ID']);$i++){
        $value='checkbox'.$arrayData['ID'][$i];
        if (isset($_POST[$value])){
        // echo( $arrayData['product_name'][$i].'est checked');
        $cat='cat'.$arrayData['ID'][$i];
        $id_type=$arrayData['ID_type'][$i];
        $post_cat = $_POST[$cat];
        $zebi = $_POST['input_nomsalle'];
        $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle, id_installation) VALUES('.$zebi.','.$post_cat.','.$id_type.','.$id_salle.','.$id_installation.') ");
        $requeteajoutercapteurs->execute() ; }
                }
            }
        


require('../view/gestionsalleview.php');