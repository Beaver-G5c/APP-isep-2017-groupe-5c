<?php 
	// Chargement des fonctions definies dans le model
	require_once($localisation.'/admin/model/admin_homepage_model.php');

	// Si on accede a cette page apres le formulaire, effectuer les actions suivantes :
	if (isset($_POST['valider'])) {
		// Appel de la fonction d'update de la db
		change_homepage_catchword($bdd,$_POST["title"],$_POST["text"]);
	}


	// On recupere les donnes de la db via la fonction get_data_homepage
	$data=get_data_homepage($bdd);
	// On affiche la view pour acceder au formulaire.
	require($localisation.'admin/view/admin_homepage_view.php');



?>