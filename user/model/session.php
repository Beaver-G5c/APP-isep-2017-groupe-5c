<?php
if (isset($donnees['ID_user']))
{
	$reponse=$bdd -> query('SELECT * FROM users WHERE ID_user="'.$id_user.'"');
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
		$_SESSION['ID_installation']=getInstallNumberFromIdUser($_SESSION['ID_user'],$bdd);
		
		}
		
}		?>



