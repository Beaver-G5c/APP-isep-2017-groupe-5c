<?php

function define_reveil($heure,$minutes)
{

	
	try
    	{
	   $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
    	}
    
    catch (Exception $e)
    	{
        	die('Erreur : ' . $e->getMessage());
    
    	}

	$req=$bdd->prepare( "INSERT INTO donnee( 'valeur1','valeur2','date') VALUES (:valeur1, :valeur2,NOW())");
	$req-> execute(array(
	'valeur1'=>$heure,
	'valeur2'=>$minutes,
	));
	
	}


function define_chauffer($temperature)
{
	try
    	{
	   $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
    	}
    
    catch (Exception $e)
    	{
        	die('Erreur : ' . $e->getMessage());
    
    	}
    	$valeur2=0;
	$req=$bdd->prepare( "INSERT INTO donnee ( 'valeur1', 'valeur2', 'date') VALUES (:valeur, :valeur2, NOW())");
	$req-> execute(array(
	'valeur'=>$temperature));
	
	}

?>