<?php

		// connexion a la base de données alert 
	
	$bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	
	function add_alert($description, $statut, $name, $id_target, $type_alerte, $niveau_alerte, $ID_notif){
        
        	
        	$bdd=new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
    	$req=$bdd->prepare("INSERT INTO `notification`(`ID_notif`, `ID_user`, `notif_description`, `notif_date`, `notif_name`, `notif_statut`, `notif_type`, `notif_lvl`) VALUES (?,?,?,NOW(),?,?,?,?)");
    	$req->execute(array($ID_max,$_POST['id_user_target'], $_POST['description'],$_POST['name'],"Non traitee",$_POST['type_alert'],$_POST['lvl_alert']));
	}

	function get_next_id() { 
		// Permet d'obtenir le dernier ID de notificatio rentré dans la DB afin d'obtenir le suivant.
		// La fonction return directement le nombre n+1 s'il y a déja n notifications dans la db.
		$_id_max = 1;
	    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
	    $request =$bdd->query('SELECT * FROM notification');
	    while ($donnees = $request->fetch()){ 
	    	// on incrémente simplement un compteur.
	        $_id_max= $_id_max +1;
	        
	    }
	    return $_id_max;
	}

?>