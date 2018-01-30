<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/


require($localisation.'user/model/connection_model.php');

if (isset($_POST['submit']))
	
{

	
	
	if
		(check_login_password_match(input_securisation($_POST['login']),input_securisation($_POST['password']),$bdd))
	// si login et password correspondent on est dans ce cas 
	
	{
		
		// ----------------------on ajoute les valeurs pour la session-------------------------------
		
		
		// on get l'id dans la base en fonction du login
	    $_SESSION['ID_user']=get_id_from_login(input_securisation($_POST['login']),$bdd);
	    
		require ($localisation.'user/model/session.php');
		
		
		// on passe l'user en mode connected + date de connexion 
		turn_user_into_connected_and_update_connection_date( $_SESSION['ID_user'],$bdd);
			
		if ( $_SESSION['is_admin']==1)
		{
		    
			header('Location: index.php?page=admin_user_list');
		}
		
		else 
		{
		    
			header('Location: index.php?page=user_programmation');
			
		   /*echo( $_SESSION['ID_user'].'<br/>');
		   echo( $_SESSION['name'].'<br/>');
		   echo( $_SESSION['email'].'<br/>');
		   echo( $_SESSION['password'].'<br/>');
		   echo( $_SESSION['phone_number'].'<br/>');
		   echo( $_SESSION['last_connection_date'].'<br/>');
		   echo( $_SESSION['admin_authorization'].'<br/>');
		   echo( $_SESSION['is_admin'].'<br/>');
		   echo( $_SESSION['last_cgu_acceptance'].'<br/>');
		   echo( $_SESSION['ID_installation'].'<br/>');*/
		}
			
			
	}
	
	else
	{
		echo '<p>Le Login et le password ne correspondent pas</p>';
		// retour vers la connexion
		require ($localisation.'user/view/user_connection_view.php');
	}
	
}

else
{
	require ($localisation.'user/view/user_connection_view.php');
}







		
