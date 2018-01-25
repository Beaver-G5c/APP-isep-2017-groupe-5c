<?php


function lumiere_all($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	
	$bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta= $ID_install  AND type=1 AND nomdelasalle='". $selec_salle ."'  ");
}

function lumiere_et($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install  AND type=1 AND nomdelasalle='". $selec_salle ."' ");
}

function chauffage_all($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install  AND type=8 AND nomdelasalle='". $selec_salle ."' ");
}


function chauffage_et($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install  AND type=8 AND nomdelasalle='". $selec_salle ."' ");
 }

function fen_ouvre($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install  AND type=2 AND nomdelasalle='". $selec_salle ."' ");
 }

function fen_ferme($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install  AND type=2 AND nomdelasalle='". $selec_salle ."' ");
 }

 function ferme_volets($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install  AND type=10 AND nomdelasalle='". $selec_salle ."' ");
 }

 function ouvr_volets($bdd){

	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install  AND type=10 AND nomdelasalle='". $selec_salle ."' ");
 }


 function activer_capteur($bdd){

	$id_capteur=$_POST['id_capteur'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install AND id_capteur='". $id_capteur ."' ");
 }

 function desactiver_capteur($bdd){

	$id_capteur=$_POST['id_capteur'];
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install AND id_capteur='". $id_capteur ."' ");
 }
 

?>