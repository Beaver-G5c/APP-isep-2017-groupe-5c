<?php
require ("../connect.php");
require($nomDossier."functions/functions_admin.php");
require ($nomDossier."view/action_view.php");
require ($nomDossier."model/action_model.php");

 

if ($_POST['submit']=='Supprimer')
{

	dropUser($_POST['id_user']);
	dropUserView();
	
}


if ($_POST['submit']=='Modifier')
{
	
	$dataUser=getInfo($_POST['id_user']);
	updateUserForm($dataUser);
	
	
	}
	



?>