<?php

	// connexion a la base de données notification.
	
	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	
	function add_alert($description, $name, $id_target, $type_alerte, $niveau_alerte, $ID_notif, $db){

		// Cette fonction prend en arguments des informations issues du formulaire et les ajoute à la base de données.  
         	
        // On prépare la requete d'ajout à la base de données

		$req=$db->prepare("INSERT INTO `notification`(`ID_notif`, `ID_user`, `notif_description`, `notif_date`, `notif_name`, `notif_statut`, `notif_type`, `notif_lvl`) VALUES (?,?,?,NOW(),?,?,?,?)");

		// On execute la requete en y ajoutant les paramètres rentrés lors de l'appel de la fonction.

    	$req->execute(array($ID_notif,$id_target,$description,$name,"Non traitee",$type_alerte,$niveau_alerte));

	}
	


function get_next_id($db) {
	// Cette fonction récupère les Id_notif par ordre décroissant et récupère les données de la 1ere ligne, soit du plus grand ID_notif de la DB.
	// Elle return ensuite ce résultat +1 pour obtenir l'ID de la prochaine notification.

	$request=$db->query('SELECT ID_notif FROM notification ORDER BY ID_notif DESC');
	$donnees = $request->fetch();
	$_id = $donnees['ID_notif'];
	$_id_max = $_id +1;

	return $_id_max;
}

	function delete_notif($id, $db){
		// Cette fonction prend pour argument un ID et la base de données, et supprime dans la DB la ligne correspondant à cet ID.

		// On execute la requete sql DELETE en précisant l'ID de la notif à supprimer.
		$db->exec("DELETE FROM `notification` WHERE `ID_notif` = '$id'");

	}
?>
