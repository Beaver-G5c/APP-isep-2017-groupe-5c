<?php

function dropUser($id_user)
{
	require ("../connect.php");
	
	$reponse=$bdd -> query('DELETE FROM users WHERE ID_user="'.$id_user.'" ');
}







