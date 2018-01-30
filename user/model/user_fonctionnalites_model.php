<?php
$ID_install=$_SESSION['ID_installation'];


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
    $bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install  AND type=9 AND nomdelasalle='". $selec_salle ."' ");
}

function fen_ferme($bdd){
    
    $selec_salle=$_POST['selec_salle'];
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install  AND type=9 AND nomdelasalle='". $selec_salle ."' ");
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
    
    $nom_du_capteur=$_POST['nom_du_capteur'];
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install AND nom_du_capteur='". $nom_du_capteur ."' ");
}

function desactiver_capteur($bdd){
    
    $nom_du_capteur=$_POST['nom_du_capteur'];
    $ID_install=$_SESSION['ID_installation'];
    $bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install AND nom_du_capteur='". $nom_du_capteur ."' ");
}


?>