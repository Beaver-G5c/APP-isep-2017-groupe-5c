
    
<?php require ($localisation.'user/model/user_profile_model.php');
		require ($localisation.'user/view/user_profile_view.php');


    
$_SESSION['id_user']=61;
        displayInfos(getInfo($_SESSION['id_user']),$bdd,);
		modifForm();

if ($_POST['submit']=='Modifier'){
	
	updateUser($idUser,$name,$email,$phone_number,$is_admin,$admin_authorization,$bdd)
}
    




?>