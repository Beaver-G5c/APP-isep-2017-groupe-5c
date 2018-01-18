<?php


	require ('admin_modif_alert_model_v2.php');
	
	
	

	if (isset($_POST['valider'])){
		//update_db_notification ($_POST['user_id'], $_POST['alert_id'], $_POST['description'], $_POST['alert_state'], $_POST['alert_name'],$_POST['alert_lvl'], $_POST['alert_type'], $data['notif_date']);
		//require('admin_alert_controler_v2.php');
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
		$_SESSION['test']= $

	    $req = $bdd->prepare("UPDATE `notification` SET `ID_notif`="$_POST['alert_id']",`ID_user`="$_POST['alert_id']",`notif_description`="$_POST['description']",`notif_date`="$data['notif_date']",`notif_name`="$_POST['alert_name']",`notif_statut`="$_POST['alert_state']",`notif_type`="$_POST['alert_type']",`notif_lvl`="$_POST['alert_lvl']" WHERE `ID_notif`="$_POST['alert_id']"");

		// execution de la requete 

	    $req->execute();

	    require('admin_alert_controler_v2.php');


	}

	else {

		// $_SESSION['modif_alert_id'] = $_POST['ID_alert'];
		$_SESSION['modif_alert_text'] = " ";
		$_SESSION['modif_user_id'] = 0;
		$_SESSION['modif_alert_state'] = " ";
		$_SESSION['modif_alert_name'] = " ";
		$_SESSION['modif_alert_lvl'] = 0;
		$_SESSION['modif_alert_type'] = " ";
		require ('admin_modif_alert_view_v2.php');

	}

?>