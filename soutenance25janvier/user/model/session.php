<?php
if (isset($_SESSION['ID_user']))
{
	$reponse=$bdd -> query('SELECT * FROM users WHERE ID_user="'.$_SESSION['ID_user'].'"');
	$id=NULL;
	$donnees=$reponse->fetch();
	
		
		$id=$donnees['ID_user'];
		$_SESSION['ID_user']=$donnees['ID_user'];
		$_SESSION['name']=$donnees['name'];
		$_SESSION['email']=$donnees['email'];
		$_SESSION['password']=$donnees['password'];
		$_SESSION['phone_number']=$donnees['phone_number'];	
		$_SESSION['last_connection_date']=$donnees['last_connection_date'];	
		$_SESSION['admin_authorization']=$donnees['admin_authorization'];
		$_SESSION['is_admin']=$donnees['is_admin'];
		$_SESSION['last_cgu_acceptance']=$donnees['last_cgu_acceptance'];
		$_SESSION['ID_installation']=getInstallNumberFromIdUser($_SESSION['ID_user'],$bdd);
		
		$_SESSION['statut']='pute vierge';
		
		
		
		
		
	
	// si is admin est à 1 l'user est admin 
	// s'il est à 0 on a à faire à un user
	// autrement c'est un visiteur
		if ($donnees['is_admin']==1){
			$_SESSION['statut']='admin';
		}
		else 
		{
			$_SESSION['statut']='user';
			echo 'jai chang� le statut en user';
		}
		
		
			
		
}	






