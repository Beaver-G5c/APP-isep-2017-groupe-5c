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
	
	if (isset($_POST['submit_action'])){
		// on test la valeur de la checkbox admin 
		if (isset($_POST['is_admin'])){
			$admin=1;
			}
		else{
			$admin=0;
			}
		

		
		updateUser($_POST['id'],$_POST['name'],$_POST['email'],$_POST['phone_number'],$admin,0);
		
	}
	
}


?>