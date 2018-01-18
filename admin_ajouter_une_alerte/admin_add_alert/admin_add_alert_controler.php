<?php
    

	require ('admin_add_alert_model.php');

	

	if (isset($_POST['submit'])){


		$ID_max = get_next_id();

		// add_alert($_POST['description'], "Non traitee", $_POST['name'], $_POST['id_user_target'], $_POST['type_alert'], $_POST['lvl_alert'], $ID_max);


        //$req=$bdd->prepare("INSERT INTO `notification`(`notif_text`, `notif_date`, `notif_statut`, `notif_name`, `ID_user`, `notif_lvl`, `notif_type`, `ID_notif`) VALUES(?,'.now().',?,?,?,?,?,? )");      

        //$req->execute(array($_POST['description'],"Non traitee",$_POST['name'],$_POST['id_user_target'],$_POST['type_alert'], $_POST['lvl_alert'],$ID_max));


    	$req=$bdd->prepare("INSERT INTO `notification`(`ID_notif`, `ID_user`, `notif_description`, `notif_date`, `notif_name`, `notif_statut`, `notif_type`, `notif_lvl`) VALUES (?,?,?,NOW(),?,?,?,?)");
    	$req->execute(array($ID_max,$_POST['id_user_target'], $_POST['description'],$_POST['name'],"Non traitee",$_POST['type_alert'],$_POST['lvl_alert']));
		unset($_POST['valider']);
		require("admin_add_alert_view.php");
		
	}
	
	else{
		 session_start();
		 $ID_max = get_next_id();
		 $_SESSION["ID_notification"] = $ID_max;
		require('admin_add_alert_view.php');
    	

	}

  	
  	


?>