<?php
	
	function add_alert($description, $name, $id_target, $type_alerte, $niveau_alerte, $ID_notif, $db){

		// Cette fonction prend en arguments des informations issues du formulaire et les ajoute à la base de données.  
         	
        // On prépare la requete d'ajout à la base de données

		$req=$db->prepare("INSERT INTO `notification`(`ID_notif`, `ID_user`, `notif_description`, `notif_date`, `notif_name`, `notif_statut`, `notif_type`, `notif_lvl`) VALUES (?,?,?,NOW(),?,?,?,?)");

		// On execute la requete en y ajoutant les paramètres rentrés lors de l'appel de la fonction.

    	$req->execute(array($ID_notif,$id_target,$description,$name,"Non traitee",$type_alerte,$niveau_alerte));

	}

	function get_next_id($db) { 
		/* Permet d'obtenir le dernier ID de notificatio rentré dans la DB afin d'obtenir le suivant.
		   La fonction return directement le nombre n+1 s'il y a déja n notifications dans la db. */

		// On initie la variable à 1.
		$_id_max = 1;

		// On parcours les n lignes de la base de données
	    $request =$db->query('SELECT * FROM notification');

	    // ($donnees = $request->fetch()) stocke dans $donnees la prochaine ligne de la DB, en commençant par la premiere.
	    // Si elle existe, alors fetch() stocke les données et la boucle continue, sinon fetch() return False et la boucle s'arrete.

	    while ($donnees = $request->fetch()){ 

	    	// on incrémente simplement le compteur. Pour une DB avec n lignes, le while fera n boucle et à la fin du while $_id_max aura la valeur n+1.

	        $_id_max= $_id_max +1;
	        
	    }

	    /* On return le résultat tant attendu, soit celui du nombre de notifications existantes ( n ) + 1. Toutes les notifications ont obtenu leur ID
	       par cette fonction, donc la première a l'ID 1 et les autres ont un ID correspondant à leur position dans la DB : La notification ligne i
	       aura une ID égale à i. La notification ajoutée à la ligne n+1 aura donc l'ID n+1.  */
	    return $_id_max;
	}

?>
