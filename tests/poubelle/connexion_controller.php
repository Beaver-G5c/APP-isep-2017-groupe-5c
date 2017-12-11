<?php

if (isset($_POST['submit']))
{
	require ('connect_model.php');
	if (check_login_password_match($_POST['login'],$_POST['password']))
	{
		require('gestion_manuelle.php');
	}
	
	else
	{
		echo 'Le nom d utilisateur ou le mot de passe saisi est incorrect';
		require ('connect_view.php');
	}
	
}

else
{
	require ('connect_view.php');
}




	
/* scenario
l'user rentre une fois ses identifiants
il clique sur entrer
on check si ca correspond
	si ca marche --> on est bon --> renvoi vers sa gestion manuelle
	sinon
		on incremente le nombre d'essai 
		on lui affiche le nombre d'essai qui lui reste
		on remet le submit vide pour pouvoir lui reafficher le form
*/