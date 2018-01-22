<?php
$_SESSION['ID_installation']=2;
require ($localisation.'user/view/gestion_manuelle.php');
empty ($_POST['reveil']);
empty ($_POST['chauffer']);


if (isset($_POST['reveil']))
{	
	require ($localisation.'user/model/gestion_manu_model.php');

	define_reveil($_POST['heure'],$_POST['minutes'],$bdd);
	}

if (isset($_POST['reveil_des']))
{	
	require ($localisation.'user/model/gestion_manu_model.php');

	define_reveil_des($bdd);
	}



if (isset($_POST['chauffer'])) 
{	require ($localisation.'user/model/gestion_manu_model.php');
	define_chauffer($bdd);
}

if (isset($_POST['chauffer_des'])) 
{	require ($localisation.'user/model/gestion_manu_model.php');

	define_chauffer_des($bdd);
}


if (isset($_POST['ouvrirfen'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	open_win($bdd);

}

if (isset($_POST['fermerfen'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	close_win($bdd);

}

if (isset($_POST['alarme'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	alarme($bdd);

}

if (isset($_POST['ouvrevolets'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	ouvrevolets($bdd);

}

if (isset($_POST['fermevolets'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	fermevolets($bdd);

}


if (isset($_POST['allum_lum'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	allum_lum($bdd);

}


if (isset($_POST['et_lum'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	et_lum($bdd);

}


if (isset($_POST['vacances'])) 
{	
	require ($localisation.'user/model/gestion_manu_model.php');
	fermevolets($bdd);
	alarme($bdd);
	close_win($bdd);
	et_lum($bdd);


}




?>


