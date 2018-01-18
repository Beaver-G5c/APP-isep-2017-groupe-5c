<?php 
/*
	    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	    $req = $bdd->prepare("UPDATE `notification` SET `ID_notif`=[value-1],`ID_user`=[value-2],`notif_description`=[value-3],`notif_date`=[value-4],`notif_name`=[value-5],`notif_statut`=[value-6],`notif_type`=[value-7],`notif_lvl`=[value-8] WHERE 1");
	    $req->execute();
*/

	    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');

		// preparation de la requete

	    $req = $bdd->prepare("UPDATE `notification` SET `ID_notif`='$notif_id',`ID_user`='$user_id',`notif_description`='$notif_description',`notif_date`='$notif_date',`notif_name`='$notif_name',`notif_statut`='$notif_state',`notif_type`='$notif_type',`notif_lvl`='$notif_lvl' WHERE `ID_notif`='$notif_id'");

		// execution de la requete 

	    $req->execute();


?>