<?php

		// connexion a la base de données alert 
	
	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', 'root');
	
	function add_alert($description, $statut, $name, $id_target, $type_alerte, $niveau_alerte){

    // preparation de la requete

	$req=$bdd->prepare("  INSERT INTO `notification`(`notif_text`, `notif_date`, `notif_statut`, `notif_name`, `ID_user`, `notif_lvl`, `notif_type`) VALUES(:notif_text,NOW(),:notif_statut,:notif_name,:id_user, :notif_level, :notif_type)");

	
	// execution de la requete 
	
	$req-> execute(array(
	'notif_text'=>$description,
	'notif_statut'=>$statut,
	'notif_name'=>$name,
	'id_user'=>$id_target,
	'notif_level'=>$niveau_alerte,
	'notif_type'=>$type_alerte));

		
	}


?>