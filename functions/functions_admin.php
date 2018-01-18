<?php

function dropUser($id_user)
{
	require ("../connect.php");
	
	$reponse=$bdd -> query('DELETE FROM users WHERE ID_user="'.$id_user.'" ');
}



function input_securisation($string){
    $string=addcslashes($string,'%,/');
    $string=htmlspecialchars($string);
    $string=htmlentities($string);
    return $string;
}




