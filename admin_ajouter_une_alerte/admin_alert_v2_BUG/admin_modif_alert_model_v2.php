<?php

	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	$requete=$bdd->query("SELECT * FROM `notification` WHERE `ID_notif`>=".$_POST['ID_alert']."");
    $data=$requete->fetch();

	

	function update_db_notification ($user_id, $notif_id, $notif_description, $notif_state, $notif_name, $notif_lvl, $notif_type, $notif_date ) {

		$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');

		// preparation de la requete

		echo($user_id);
		echo($notif_id);
		echo($notif_description);
		echo($notif_state);
		echo($notif_name);
		echo($notif_lvl);
		echo($notif_type);
		echo($notif_date);

	    $req = $bdd->prepare("UPDATE `notification` SET `ID_notif`='$notif_id',`ID_user`='$user_id',`notif_description`='$notif_description',`notif_date`='$notif_date',`notif_name`='$notif_name',`notif_statut`='$notif_state',`notif_type`='$notif_type',`notif_lvl`='$notif_lvl' WHERE `ID_notif`='$notif_id'");

		// execution de la requete 

	    $req->execute();


	


	}
	
	function get_data_notif($notif_id) {
	    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');

	    $donnees = $bdd->query('SELECT * FROM `notification` WHERE `ID_notif` = .$_SESSION["modif_alert_id"].');
	    /*echo ($reponse);
	    $donnees = $reponse->fetch(); */
	    
	    return $donnees;
	
	}
?>