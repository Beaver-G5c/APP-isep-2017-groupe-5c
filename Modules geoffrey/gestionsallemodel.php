<?php
require '../connect.php';
$id_installation = 456;
$requete = $bdd->query("SELECT * FROM salle");
$requete2=$bdd->query('SELECT * FROM salle WHERE id_installation= \'' . $id_installation . '\';');

$id_salle=1;
while($resultatmodif = $requete2 -> fetch() ){
    $id_salle++; }
    //Permet de donner un id égal à l'id de la derniere piece ajoutée pour cette installation + 1
    



if (isset($_POST['valider_ajout']) AND !empty($_POST['input_nomsalle'])) {
    
    $requeteajouter = $bdd->prepare("INSERT INTO salle(nomdelasalle,id_installation,id_salle) VALUES(? , ?, ".$id_salle." ) ");
    $requeteajouter->execute(array($_POST['input_nomsalle'], $_POST['input_id_installation']));
    
    
}
if(isset($_POST['suprsalle'])){
    
    
    
    $suprsalle = $bdd->query('DELETE FROM salle WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
    $suprsalle = $bdd->query('DELETE FROM capteurs WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
    $suprsalle->execute();
    
}
//Supprimer de la BDD



if(isset($_POST['valider_ajout']) AND !empty($_POST['id_luminosite'])){
    $luminosite=$_POST['id_luminosite'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$luminosite.',1,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
//ajout des capteurs de luminosite dans la BDD

if(isset($_POST['valider_ajout']) AND !empty($_POST['id_position'])){
    $position=$_POST['id_position'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$position.',2,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout capteurs position dans la bdd

if(isset($_POST['valider_ajout']) AND !empty($_POST['id_cc2650'])){
    $cc2650=$_POST['id_cc2650'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$cc2650.',3,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout capteurs multifonction dans la bdd

if(isset($_POST['valider_ajout']) AND !empty($_POST['id_fumee'])){
    $fumee=$_POST['id_fumee'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$fumee.',4,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout detecteur de fumee position dans la bdd

if(isset($_POST['valider_ajout']) AND !empty($_POST['id_presence'])){
    $presence=$_POST['id_presence'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$presence.',5,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout capteurs presence dans la bdd
if(isset($_POST['valider_ajout']) AND !empty($_POST['id_contact'])){
    $contact=$_POST['id_contact'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$contact.',6,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout capteurs contact dans la bdd
if(isset($_POST['valider_ajout']) AND !empty($_POST['id_alarme'])){
    $alarme=$_POST['id_alarme'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$alarme.',7,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout actionneur alarme dans la bdd

if(isset($_POST['valider_ajout']) AND !empty($_POST['id_climatisation'])){
    $climatisation=$_POST['id_climatisation'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$climatisation.',8,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout actionneur climatisationdans la bdd

if(isset($_POST['valider_ajout']) AND !empty($_POST['id_fenetre'])){
    $fenetre=$_POST['id_fenetre'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$fenetre.',9,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout actionneur fenetre dans la bdd
if(isset($_POST['valider_ajout']) AND !empty($_POST['id_volet'])){
    $volet=$_POST['id_volet'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$volet.',10,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout actionneur volet dans la bdd

if(isset($_POST['valider_ajout']) AND !empty($_POST['id_reveil'])){
    $reveil=$_POST['id_reveil'];
    
    $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_sensor, type,id_salle ) VALUES(?,'.$reveil.',11,'.$id_salle.') ");
    $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
}
// ajout actionneur alarme dans la bdd

$id_installation=456;
$requete2=$bdd->query('SELECT * FROM salle WHERE id_installation=\'' . $id_installation . '\';');

if(isset($_POST['valider_suppresioncapt'])){
    $suprcapt = $bdd->query('DELETE FROM capteurs WHERE id_sensor = \'' . $_POST['id_suppresion_capteur'] . '\';');
    $suprcapt->execute();
    
    
}
























?>