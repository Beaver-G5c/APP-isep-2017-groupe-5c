<?php

function check_login_password_match ($login,$password)
{

	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	$reponse=$bdd -> query('SELECT password FROM users3 WHERE name="'.$login.'" ');
	$password_enregistre=NULL;

while ($donnees=$reponse->fetch())
{
	
	$password_enregistre=$donnees['password'];
}

if ($password_enregistre==NULL)
	return 0;

if ( $password_enregistre == $password)
	return 1;

else 
	return 0;

}

?>
