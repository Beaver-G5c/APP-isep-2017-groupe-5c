<?php 

	function get_data_homepage($db){
		// Cette fonction prends en argument la base de données à parcourir et recupere les donnees relatives au sloggan de la page d'accueil.

		$requete=$db->query("SELECT * FROM homepage WHERE ID_text=1");
	    $data=$requete->fetch();

		return $data;
	}

	?>