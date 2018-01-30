
    
<?php require ($localisation.'user/model/user_profile_model.php');
		require ($localisation.'user/view/user_profile_view.php');


    
//$_SESSION['id_user']=60;
//$_SESSION['password']='$2y$10$YfuLs0z0hYetuta6xO189OXzQBdhCIfqIRqiI77wksKpPWOzgE8XW';
        

if (isset( $_POST['submit'])){
	
	if ($_POST['submit']=='Modifier'){
		updateUserForm(getInfoUser($bdd,$_SESSION['ID_user']));
		
	}
    
	if ($_POST['submit']=='Modifier le mot de passe')
		{
			modifPasswordForm();
		}
	}




if (isset($_POST["submit_2"]))
{
	updateUser($_POST['id_user'],$_POST['name'],$_POST['email'],$_POST['phone_number'],0,0,$bdd);
	//displayInfos(getInfoUser($bdd,$_SESSION['id_user']));
	//modifForm();
}








if (isset($_POST["submit_password"]))
{
	
	
    $password_in_database=$_SESSION['password'];
	
	if (($_POST['password1']==$_POST['password2'])&&( password_verify($_POST['ex-password'],$password_in_database)))
	{
		changePassword($bdd,$_SESSION["ID_user"],$_POST['password1']);
		displayInfos(getInfoUser($bdd,$_SESSION['ID_user']));
		modifForm();
	}
	
	
	else
	{
		refusePasswordChange();
		modifPasswordForm();
		
	}
}

else
{
	displayInfos(getInfoUser($bdd,$_SESSION['ID_user']));
	modifForm();
}

?>