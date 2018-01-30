<?php


/*
 Cette page permet d'activer et de desactiver certains actionneurs via les boutons, et d'afficher les informations que les capteurs renvoient
 
 */
empty ($_POST['reveil']);
empty ($_POST['chauffer']);
require ($localisation.'user/model/user_gestion_manuelle_model.php');

if (isset($_POST['reveil']))
{
    
    define_reveil($_POST['heure'],$_POST['minutes'],$bdd);
}

if (isset($_POST['reveil_des']))
{
    
    define_reveil_des($bdd);
}



if (isset($_POST['chauffer']))
{	
define_chauffer($bdd);
}

if (isset($_POST['chauffer_des']))
{	

define_chauffer_des($bdd);
}


if (isset($_POST['ouvrirfen']))
{
    
    open_win($bdd);
    
}

if (isset($_POST['fermerfen']))
{
    
    close_win($bdd);
    
}

if (isset($_POST['alarme']))
{
    
    alarme($bdd);
    
}

if (isset($_POST['ouvrevolets']))
{
   
    ouvrevolets($bdd);
    
}

if (isset($_POST['fermevolets']))
{
    
    fermevolets($bdd);
    
}


if (isset($_POST['allum_lum']))
{
    
    allum_lum($bdd);
    
}


if (isset($_POST['et_lum']))
{
    
    et_lum($bdd);
    
}


if (isset($_POST['vacances']))
{
    
    fermevolets($bdd);
    
    alarme($bdd);
    close_win($bdd);
    et_lum($bdd);
    require ($localisation.'user/view/user_gestion_manuelle_view.php');
    
    
}

else
{
    require ($localisation.'user/view/user_gestion_manuelle_view.php');
}




?>

