<?php
    

	require_once('admin_alert_model.php');
	
	// Si on accede à cette page via le formulaire d'ajout de notification, on effectue les actions suivantes :

	if (isset($_POST['submit'])){

		//Permet d'obtenir l'ID de la prochaine notification en parcourant les notifs existantes.

		$ID_max = get_next_id($bdd);

		// Appel de la fonction d'ajout de notification avec les paramètres obtenus du formulaire.

		add_alert($_POST['description'],$_POST['name'],$_POST['id_user_target'],$_POST['type_alert'], $_POST['lvl_alert'], $ID_max, $bdd);

		// On détruit la variable $_POST['valider'] pour éviter de boucler continuellement l'ajout de notification, une fois c'est suffisant.

		unset($_POST['valider']);

		// On affiche la page avec la nouvelle notification dans le tableau des notifs.

		require("admin_alert_view.php");
		
	}

	if (isset($_POST['submit3'])){

		// Appel de la fonction delete_notif, qui supprime la ligne de la DB correspondant à l'ID en paramètre.

		delete_notif($_POST['ID_alert'], $bdd);

		// On affiche la page pour pouvoir remplir le formulaire.

		require ('admin_modif_alert_view.php');

	}

	// Si on accede à cette page depuis le lien "Ajouter une notification", on effectue les actions suivantes :

	else{

		 // On affiche la page view afficahnt le formulaire d'ajout de notification et la liste des notifications.

		require('admin_alert_view.php');
    	

	}


?>
