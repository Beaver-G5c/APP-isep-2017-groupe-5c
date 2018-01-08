<?php

require ( "../connect.php");
function add_number($install_number){
	
	
	$bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
	
	
	
	// -----------------------preparation de la requete---------------------
	$req=$bdd->prepare(" INSERT INTO `install_number`(`install_number`) VALUES(:install_number)");
	
	
	// --------------------execution de la requete ---------------------------
	
	$req-> execute(array('install_number'=>$install_number));
}





	require ( "../connect.php");
	$req = $bdd->query('SELECT * FROM install_number ');
	
