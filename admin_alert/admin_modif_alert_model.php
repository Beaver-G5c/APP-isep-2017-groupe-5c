<?php
	// Si la variable "$_POST['ID_alert']" est définie, on affiche dans le formulaire les données de la DB correspondat à cet ID.
	if (isset($_POST['ID_alert'])){
		$requete=$bdd->query("SELECT * FROM `notification` WHERE `ID_notif`=".$_POST['ID_alert']."");
	    $data=$requete->fetch(); }

	// Sinon on affiche les données correspondant à l'ID 1, pour éviter un éventuel bug due à l'absence de $_POST['ID_alert'].
	else{
		$requete=$bdd->query("SELECT * FROM `notification` WHERE `ID_notif`=1");
	    $data=$requete->fetch();
	}

	

	function update_db_notification ($user_id, $notif_id, $notif_description, $notif_state, $notif_name, $notif_lvl, $notif_type, $notif_date, $db ) {
		// Cette fonction prend en argument les valeurs obtenues du formulaire de modification de la notification ainsi que la DB, et applique la modification
		// de la ligne de la DB correspondant à l'ID de la notification indiquée.

		// Pour appeller cette fonction utiliser cette ligne de code :
		// update_db_notification ($_POST['user_id'], $_POST['alert_id'], $_POST['description'], $_POST['alert_state'], $_POST['alert_name'], $_POST['alert_lvl'], $_POST['alert_type'], $data['notif_date'], $db );

		// On prépare la requete SQL de modification du contenu d'une ligne de la DB, déterminée par son ID_notif.

	    $req = $db->prepare("UPDATE `notification` SET `ID_user`=?,`notif_description`=?,`notif_date`=?,`notif_name`=?,`notif_statut`=?,`notif_type`=?,`notif_lvl`=? WHERE `ID_notif`=?");

		// On execute la requete avec les données rentrées en arguments de la fonction.

	    $req->execute(array($user_id,$notif_description,$notif_date,$notif_name,$notif_state,$notif_type,$notif_lvl,$notif_id));
	}  
	

		
	function delete_notif($id, $db){
		// Cette fonction prend pour argument un ID et la base de données, et supprime dans la DB la ligne correspondant à cet ID.

		// On execute la requete sql DELETE en précisant l'ID de la notif à supprimer.
		$db->exec("DELETE FROM `notification` WHERE `ID_notif` = '$id'");

	}
?>
