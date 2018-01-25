<?php

$_SESSION['ID_installation']=2;
date_default_timezone_set('Europe/Paris');


function prog_lumiere_all($heure_debut, $heure_fin, $bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 1, :id_insta, 1,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=>$nom_scenario,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));

}

function desact_scenario($bdd){
	$scenario=$_POST['SCENARIO'];

	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->exec("DELETE FROM scenario
	 WHERE id_insta=$ID_install AND nom_scenario='". $scenario ."' ");
}

function prog_lumiere_et($heure_debut, $heure_fin,$bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 0, :id_insta, 1,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=>$nom_scenario,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));
}






function prog_chauff_all($heure_debut, $heure_fin,$bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 1, :id_insta, 8,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=>$nom_scenario,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));
}


function prog_chauff_et($heure_debut, $heure_fin,$bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 0, :id_insta, 8,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=>$nom_scenario ,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));
}











function prog_fen_ouvr($heure_debut, $heure_fin, $bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 1, :id_insta, 2,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=> $nom_scenario ,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));
}


function prog_fen_ferm($heure_debut, $heure_fin, $bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 0, :id_insta, 2,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=>$nom_scenario,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));
}









function prog_vol_ouvr($heure_debut, $heure_fin,$bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 1, :id_insta, 10,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=>$nom_scenario,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));
}

function prog_vol_ferm($heure_debut, $heure_fin,$bdd){
	$nom_scenario=$_POST['nom_scenario'];
	$selec_salle=$_POST['selec_salle'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 0, :id_insta, 10,:nomdelasalle) ");
	$req-> execute(array(
	'nom_scenario'=>$nom_scenario,
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'nomdelasalle'=>$selec_salle,
	));
}




function actif_capteur($heure_debut, $heure_fin,$bdd){
	$nom_scenario=$_POST['nom_scenario2'];
	$capteur=$_POST['id_capteur'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `id_capteur`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 1, :id_insta, :id_capteur) ");
	$req-> execute(array(
	'nom_scenario'=>". $nom_scenario .",
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'id_capteur'=>$capteur,
	));

}


function inactif_capteur($heure_debut, $heure_fin,$bdd){
	$nom_scenario=$_POST['nom_scenario2'];
	$capteur=$_POST['id_capteur'];
	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("INSERT INTO `scenario`( `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `id_capteur`) VALUES (:nom_scenario, :heure_debut, :heure_fin, 0, :id_insta, :id_capteur) ");
	$req-> execute(array(
	'nom_scenario'=>". $nom_scenario .",
	'heure_debut'=>$heure_debut,
	'heure_fin'=>$heure_fin,
	'id_insta'=>$ID_install,
	'id_capteur'=>$capteur,
	));

}





 
function principale($bdd){
    $req = $bdd->query("SELECT *
    FROM capteurs, scenario
	WHERE capteurs.nomdelasalle=scenario.nomdelasalle AND scenario.type=capteurs.type AND scenario.id_insta=capteurs.id_insta ");
    while ($donnees = $req->fetch()){
            $heure=date('H:i:s');
            $heure_deb=$donnees['heure_debut'];
			$heure_fin=$donnees['heure_fin'];
		if ($heure>$heure_deb AND $heure<$heure_fin) {
			$bdd->exec( "UPDATE capteurs SET actif='".$donnees['actif_quot']."' WHERE id_insta='".$donnees['id_insta']."' AND nomdelasalle='".$donnees['nomdelasalle']."' AND type='".$donnees['type']."'");
		}
		else
		{
			$bdd->exec( "UPDATE capteurs SET actif= NOT '".$donnees['actif_quot']."' WHERE id_insta='".$donnees['id_insta']."' AND nomdelasalle='".$donnees['nomdelasalle']."' AND type='".$donnees['type']."'");
		}
            };

}


function princ($bdd){
    $req = $bdd->query("SELECT *
    FROM capteurs, scenario
    WHERE scenario.id_capteur=capteurs.id_capteur AND scenario.id_insta=capteurs.id_insta ");
    while ($donnees = $req->fetch()){
            $heure=date('H:i:s');
            $heure_deb=$donnees['heure_debut'];
			$heure_fin=$donnees['heure_fin'];
		if ($heure>$heure_deb AND $heure<$heure_fin) {
			$bdd->exec( "UPDATE capteurs SET actif='".$donnees['actif_quot']."' WHERE id_insta='".$donnees['id_insta']."' AND id_capteur='".$donnees['id_capteur']."' ");
		}
		else
		{
			$bdd->exec( "UPDATE capteurs SET actif= NOT '".$donnees['actif_quot']."' WHERE id_insta='".$donnees['id_insta']."' AND id_capteur='".$donnees['id_capteur']."' ");
		}
            };

}


 
 
?>