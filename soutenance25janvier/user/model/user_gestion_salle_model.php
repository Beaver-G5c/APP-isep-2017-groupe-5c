<?php

$id_installation = $_SESSION['ID_installation'];
$requete = $bdd->query("SELECT * FROM salle");
$requete2=$bdd->query('SELECT * FROM salle WHERE id_installation= \'' . $id_installation . '\';');

$id_salle=1;
while($resultatmodif = $requete2 -> fetch() ){
    $id_salle++; }
    //Permet de donner un id égal à l'id de la derniere piece ajoutée pour cette installation + 1
    



if (isset($_POST['valider_ajout']) AND !empty($_POST['input_nomsalle'])) {
    
    $requeteajouter = $bdd->prepare("INSERT INTO salle(nomdelasalle,id_installation,id_salle) VALUES(? , '.$id_installation.', ".$id_salle." ) ");
    $requeteajouter->execute(array($_POST['input_nomsalle'], ));
    
    
}
if(isset($_POST['suprsalle'])){
    
    
    
    $suprsalle = $bdd->query('DELETE FROM salle WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
    $suprsalle = $bdd->query('DELETE FROM capteurs WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
    $suprsalle->execute();
    
}
//Supprimer de la BDD

$requete2=$bdd->query('SELECT * FROM salle WHERE id_installation=\'' . $id_installation . '\';');

if(isset($_POST['valider_suppresioncapt'])){
    $suprcapt = $bdd->query('DELETE FROM capteurs WHERE id_capteur = \'' . $_POST['id_suppresion_capteur'] . '\';');
    $suprcapt->execute();
    
    
}
function getCatalogue($bdd){
    
    $req = $bdd->query('SELECT * FROM catalogue');
    $dataArray=array('ID_type'=>array(),'product_name'=>array());
    $i=0;
    while($donnees=$req->fetch()){
        $dataArray['ID'][$i]=$donnees['ID'];
        $dataArray['ID_type'][$i]=$donnees['ID_type'];
        $dataArray['product_name'][$i]=$donnees['product_name'];
        
        $i++;
    }
    
    return $dataArray;
    
}


function add_device ($bdd,$id,$room_name,$id_room,$id_sensor,$id_type,$id_install){
    echo ($id);
    $requeteajouter = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_salle,id_capteur,type,id_insta) VALUES(:nomdelasalle, :id_salle, :id_sensor, :type, :id_installation) ");
    $requeteajouter->execute(array('nomdelasalle'=>$room_name,'id_salle'=>$id_room, 'id_sensor'=>$id, 'type'=>$id_type, 'id_installation'=>$id_install));
    
}
























?>