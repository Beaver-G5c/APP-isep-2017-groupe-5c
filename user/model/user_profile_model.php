
<?php
function getInfoUser($bdd,$id_user){
	
	$req = $bdd->query('SELECT * FROM users WHERE  ID_user="'.$id_user.'"');
 	$donnees = $req->fetch();
	return $donnees;
	
}
		   
		   
		   ?>