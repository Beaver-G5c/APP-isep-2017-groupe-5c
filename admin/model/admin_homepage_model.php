<?php 

	function change_homepage_catchword($db, $title, $text) {

		$req=$db->prepare("UPDATE `homepage` SET`homepage_text`=?,`homepage_title`=? WHERE ID_text = ?");
		$req->execute(array($text,$title,1));

	}

	function get_data_homepage($db){

		$requete=$db->query("SELECT * FROM homepage WHERE ID_text=1");
	    $data=$requete->fetch();

		return $data;
	}
	?>