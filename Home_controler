<?php

	require ("Home_view.php");
	 //Quand on appuie sur le bouton submit on vérifie toutes les valeurs
	$_SESSION["ID_user"]=25;

	if (isset($_POST['submit'])) {
		require("Home_model.php");
		if($_POST['state']== "activated") {
			$state=1;
		}	
		else {
			$state=0;
		}
		echo'blavbla2';
		add_home($_POST['adress'],$_POST['postal_code'],$_POST['town'],$_POST['password'],$state,$_SESSION["ID_user"]);
				/*$adress=$_POST['adress'];
				$postal_code=$_POST['postal_code'];
				$town=$_POST['town'];
				$password=$_POST['password']; */

	// On donne une valeur O ou 1 dans la bdd si on décide d'activer la maison			
		
	}


?>
