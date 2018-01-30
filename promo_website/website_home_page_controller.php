<?php 
	// On charge la fonction get_data_homepage.
	require($localisation."promo_website/website_home_page_model.php");
	// On appelle cette fonction et on stocke son resultat dans $data.
	$data = get_data_homepage($bdd);
	// On affiche la view, où seront affichees les donnees contenues dans $data.
	require($localisation."promo_website/website_home_page_view.php");
	?>