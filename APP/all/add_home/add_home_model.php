<?php

function add_home($home_adress,$password,$id_user){

	try
    	{
	   $bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
    	}
    
    catch (Exception $e)
    	{
        	die('Erreur : ' . $e->getMessage());
    
    	}
	$is_operative=0;
	
	$req=$bdd->prepare(" INSERT INTO `homes`( `home_adress`,`password`,`id_user`,`is_operative`,` home_creation_date `) VALUES (:home_adress,:password,:id_user,:is_operative,NOW())");
	$req-> execute(array(
	'home_adress'=>$home_adress,
	'password'=>$password,
	'id_user'=>$id_user,
	'is_operative'=>$is_operative));
	
	
	}

?>
