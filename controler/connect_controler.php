<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/

require  ('../session_cookies/creation_session.php');
require ("../functions/function_user.php");
require ('../functions/security_functions.php');



if (isset($_POST['submit']))
	
{
	require ('../model/connect_model.php');
	require ('../session_cookies/read_cookies.php');
	
	
	if
		(check_login_password_match(input_securisation($_POST['login']),input_securisation($_POST['password'])))
	// si login et password correspondent on est dans ce cas 
	
	{
		echo 'ca roule pour toi';
		
		// ----------------------on ajoute les valeurs pour la session-------------------------------
		
		
		// on get l'id dans la base en fonction du login
		$id_user=get_id_from_login(input_securisation($_POST['login']));
			
		
			add_parameters_into_session($id_user);
			// on ajoute tous les parametres de l'user dans la session 
		
		
		
			
		
	
		
		// on passe l'user en mode connected + date de connexion --------------------
		turn_user_into_connected_and_update_connection_date( $_SESSION['ID_user']);
	}
	
	else
	{
		echo '<p>Le Login et le password ne correspondent pas</p>';
		// retour vers la connexion
		require ('../view/connect_view.php');
	}
	
}

else
{
	require ('../view/connect_view.php');
}







		
