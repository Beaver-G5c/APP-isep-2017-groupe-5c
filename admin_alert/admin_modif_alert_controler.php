<?php
	
	require_once('admin_modif_alert_model.php');

	// Si on accede à cette page après avoir remplit le formulaire de modification, effectuer les actions suivantes :

	if (isset($_POST['valider'])){

		// On appelle la fonction de modification de notification, qui prend en argument les valeurs modifiées et applique les modifications à la ligne de la DB
		// correspondant à l'ID_notif envoyé par le formulaire.

	    update_db_notification ($_POST['user_id'], $_POST['alert_id'], $_POST['description'], $_POST['alert_state'], $_POST['alert_name'], $_POST['alert_lvl'], $_POST['alert_type'], $data['notif_date'], $bdd );

	    // On réinitialise la variable $_POST['valider'] au cas où.

	    unset($_POST['valider']);

	    // On affiche la page de modification de notif à nouveau, mais cette fois avec le résultat de la notification de la DB.

	    require('admin_alert_controler.php');
	}

	// Si on accede à cette page depuis le bouton "Modifier" du tableau affichant les notifications contenues dans la DB, effectuer l'action suivante : 

	if (isset($_POST['submit2'])){

		// On affiche la page pour pouvoir remplir le formulaire.

		require ('admin_modif_alert_view.php');

	}

	// Si on accede à cette page depuis le bouton "supprimer" du tableau affichant les notifications contenues dans la DB, effectuer l'action suivante :

	if (isset($_POST['submit3'])){

		// Appel de la fonction delete_notif, qui supprime la ligne de la DB correspondant à l'ID en paramètre.

		delete_notif($_POST['ID_alert'], $bdd);

		// On affiche la page pour pouvoir remplir le formulaire.

		require ('admin_modif_alert_view.php');

	}



?>