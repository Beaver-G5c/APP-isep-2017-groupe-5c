<?php

	$nomDossier="C:/wamp64/www/testthiboo/APP/admin/";
	$nomwamp='http://localhost/testthiboo/APP/admin/';
	
	
	
	
try
    	{
	   $bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
    	}
    
    catch (Exception $e)
    	{
        	die('Erreur : ' . $e->getMessage());
    
    	}
?>