<?php

function define_reveil($heure,$minutes,$bdd)
{

	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->prepare("UPDATE capteurs SET valeur1=:valeur1 , valeur2=:valeur2, actif=1 WHERE id_insta=$ID_install && type=11");
	$req-> execute(array(
	'valeur1'=>$heure,
	'valeur2'=>$minutes,
	));
	

	echo'<p class="notif"><span>Le réveil a été enregistrée !</span></p>';
	}

function define_reveil_des($bdd)
{

	$ID_install=$_SESSION['ID_installation'];

	$req=$bdd->exec("UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install && type=11");
	echo'<p class="notif"><span>Le réveil a été desactivé</span></p>';
	
	}


function define_chauffer($bdd)
{
	
	$ID_install=$_SESSION['ID_installation'];
	$req=$bdd->exec( "UPDATE capteurs SET actif=1 WHERE id_insta=$ID_install AND type=8 ");
	echo'<p class="notif"><span>Le chauffage a été activé !</span></p>';
	
	}

function define_chauffer_des($bdd)
{
	
	$ID_install=$_SESSION['ID_installation'];
	$req=$bdd->exec( "UPDATE capteurs SET actif=0 WHERE id_insta=$ID_install AND type=8 ");
	echo'<p class="notif"><span>Le chauffage a été desactivé !</span></p>';
	
	}

function open_win($bdd)
{

	$ID_install=$_SESSION['ID_installation'];

	$bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=2 ");

}

function close_win($bdd)
{

	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0
    WHERE id_insta=$ID_install && type=2 ");

}

function allum_lum($bdd)
{

	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=1 ");

}

function et_lum($bdd)
{

	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0
    WHERE id_insta=$ID_install && type=1 ");

}




function alarme($bdd)
{

	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=7 ");

}

function ouvrevolets($bdd)
{
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=1
    WHERE id_insta=$ID_install && type=10 ");
}

function fermevolets($bdd)
{
	$ID_install=$_SESSION['ID_installation'];
	$bdd->exec( "UPDATE capteurs SET actif=0
    WHERE id_insta=$ID_install && type=10 ");
}
?>