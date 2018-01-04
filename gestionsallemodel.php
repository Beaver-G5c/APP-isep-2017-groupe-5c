<?php

$bdd = new PDO('mysql:host=localhost;dbname=app', 'root', 'root');

$requete = $bdd->query("SELECT * FROM salle");

$id_salle= rand();

if (isset($_POST["input_nomsalle"]) AND isset($_POST["input_id_installation"])) {
    
    $requeteajouter = $bdd->prepare("INSERT INTO salle(nomdelasalle,id_installation,id_salle) VALUES(? , ?, ".$id_salle." ) ");
    $requeteajouter->execute(array($_POST['input_nomsalle'], $_POST['input_id_installation']));
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,cc2650,positionangulaire, capteur_luminosite, detecteur_de_fumee, capteur_presence, capteur_contact ) VALUES(?,".$capt2650.",".$captangle.",".$captluminosite.",".$captfumee.",".$captpresence.",".$captcontact.") ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
    
}

if(isset($_POST['suprsalle'])){
    
    
    
    $suprsalle = $bdd->query('DELETE FROM salle WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
    $suprsalle = $bdd->query('DELETE FROM capteurs WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
    $suprsalle->execute();
    
}
//Supprimer de la BDD



?>