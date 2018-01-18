
<?php
function getInfoUser{
	
	$req = $bdd->query('SELECT ID_user,name,email,phone_number,account_creation_date,last_connection_date,is_connected,is_admin,admin_authorization,last_cgu_acceptance FROM users ORDER BY account_creation_date DESC LIMIT 0, 1');
 	$donnees = $req->fetch();
	return $donnes;
	
}
		   
		   
		   ?>