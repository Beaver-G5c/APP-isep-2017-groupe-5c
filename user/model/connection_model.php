<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/

function check_login_password_match ($login,$password,$bdd)
	
// renvoie 1 si le login et le password correspondent et renvoie 0 si ils ne correspondent pas ou si ils n'existent pas dans la base
{

	$reponse=$bdd -> query('SELECT password FROM users WHERE name="'.$login.'" ');
	$password_enregistre=NULL;

	while ($donnees=$reponse->fetch())
	{
		// on get tous les password dont le nom correspond au login
	
		$password_enregistre=$donnees['password'];
	}

	if ($password_enregistre==NULL)
		return 0;
		// on est dans ce cas si le password n'est pas initialisé ou si le login saisi n'existe pas dans la base
	
	

	if ( password_verify($password, $password_enregistre))
		return 1;
	// verification de la cohérence des password en utilisant le dehasahage
	else 
		return 0;
}

function get_id_from_login($login,$bdd)
{
	
	$reponse=$bdd -> query('SELECT ID_user FROM users WHERE name="'.$login.'" ');
	$id=NULL;
	while ($donnees=$reponse->fetch())
	{
		$id=$donnees['ID_user'];
	}
	if ($id!=NULL )
		return $id;
	else 
		return NULL;
}



	
	


function turn_user_into_connected_and_update_connection_date( $id,$bdd)
{

	$reponse=$bdd -> query('UPDATE users SET is_connected = 1,last_connection_date= NOW() WHERE ID_user ="'.$id.'"');
}
	
?>

