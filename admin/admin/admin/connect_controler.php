<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/
session_start();
require ("../connect.php");
require ("../functions/function_user.php");
require ('../functions/security_functions.php');



if (isset($_POST['submit']))
	
{
	require ('../model/connect_model.php');
	//require ('../session_cookies/read_cookies.php');
	
	
	if
		(check_login_password_match(input_securisation($_POST['login']),input_securisation($_POST['password'])))
	// si login et password correspondent on est dans ce cas 
	
	{
		echo 'ca roule pour toi';
		
		// ----------------------on ajoute les valeurs pour la session-------------------------------
		
		
		// on get l'id dans la base en fonction du login
		$id_user=get_id_from_login(input_securisation($_POST['login']));
		
		
		// on passe l'user en mode connected + date de connexion 
		turn_user_into_connected_and_update_connection_date( $_SESSION['ID_user']);
			
		if ( $_SESSION['is_admin']==1)
		{
			echo ( $_SESSION['is_admin']);
			header('Location: '.$nomwamp.'index.php');
		}
		
		else 
		{
			echo ('tu es un user je te redirige vers la page user');
			echo ($_SESSION['is_admin']);
			require ("../model/cookies_model.php");
		}
			
			
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







		
