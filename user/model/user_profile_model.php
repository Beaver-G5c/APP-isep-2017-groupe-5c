
<?php
function getInfoUser($bdd,$id_user){
	
	$req = $bdd->query('SELECT * FROM users WHERE  ID_user="'.$id_user.'"');
 	$donnees = $req->fetch();
	return $donnees;
	
}
		   
		   
		   ?>

<?php



function changePassword($bdd,$id_user,$password)
{
	$password = (password_hash ($password,PASSWORD_BCRYPT));
	echo ("dans la fonction pass=".$password);
	$req = $bdd->prepare('UPDATE users SET password = ? WHERE ID_user = ?');
    $req->execute(array($password,$id_user));
	
}