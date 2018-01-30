<?php


function add_number($install_number,$bdd){
	
	
	
	// -----------------------preparation de la requete---------------------
	$req=$bdd->prepare(" INSERT INTO `install_number`(`install_number`) VALUES(:install_number)");
	
	
	// --------------------execution de la requete ---------------------------
	
	$req-> execute(array('install_number'=>$install_number));
}





	
	$req = $bdd->query('SELECT * FROM install_number ');
	
	