<?php

function add_parameters_into_session($id)
	//cette fonction ne cree pas les parametres SESSION mais les initialise aux bonnes valeurs
	/* Author : Thibpffr
	version : 1.0
	date : 29/11*/

	{
	require ("../connect.php");
	$reponse=$bdd -> query('SELECT * FROM users WHERE ID_user="'.$id.'"');
	$id=NULL;
	while ($donnees=$reponse->fetch())
		{
		$id=$donnees['ID_user'];
		$_SESSION['ID_user']=$donnees['ID_user'];
		$_SESSION['name']=$donnees['name'];
		$_SESSION['email']=$donnees['email'];
		$_SESSION['password']=$donnees['password'];
		$_SESSION['phone_number']=$donnees['phone_number'];	$_SESSION['last_connection_date']=$donnees['last_connection_date'];	$_SESSION['admin_authorization']=$donnees['admin_authorization'];
		$_SESSION['is_admin']=$donnees['is_admin'];
		$_SESSION['last_cgu_acceptance']=$donnees['last_cgu_acceptance'];
		
		}
	
	}


function turn_user_into_disconnected( $id)
	// la fonction passe l'user en mode disconnected quand il se deconnecte
	/* Author : Thibpffr
	version : 1.0
	date : 29/11*/
	{
	require ("../connect.php");
	$reponse=$bdd -> query('UPDATE users SET is_connected = 0 WHERE ID_user ="'.$id.'"');
	}



function is_login_free ($login)
	// la fonction renvoie 1 si le login est libre et 0 si il est deja utilisé 
	/* Author : Thibpffr
	version : 1.0
	date : 29/11*/
	{
	require ("../connect.php");
	$reponse=$bdd -> query('SELECT name FROM users WHERE name="'.$login.'" ');
	
	$data_base_login=NULL;
	
	while ($donnees=$reponse->fetch())
		{
		$data_base_login=$donnees['name'];
		}
	
	if ($data_base_login!=NULL)
		return 0;
	else
		return 1;
	}

