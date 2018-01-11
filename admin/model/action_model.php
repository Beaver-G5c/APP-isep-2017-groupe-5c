<?php

function getInfo($id_user){
	require ("../connect.php");


	$req = $bdd->prepare('SELECT ID_user,name,email,phone_number,is_connected,is_admin,admin_authorization FROM users WHERE ID_user=?');
	$req->execute(array($id_user));

	while ($donnees=$req->fetch())
	{
	
		return $donnees;
	 }
	 
}


function updateUser($idUser,$name,$email,$phone_number,$is_admin,$admin_authorization)
{
	require ("../connect.php");
	
	
	
	$req = $bdd->prepare('UPDATE users SET name = ?,email=? ,phone_number=?,is_admin=?, admin_authorization=? WHERE ID_user = ?');
    $req->execute(array($name,$email,$phone_number, $is_admin,$admin_authorization, $idUser));
	
	//header("Refresh:0");
	
	
}
	
