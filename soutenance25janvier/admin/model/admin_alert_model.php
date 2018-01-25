<?php
	
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

function getNotifTable($bdd){
	$request =$bdd->query('SELECT * FROM notification ORDER BY ID_notif ');
	
	$arrayOfData=array('ID_notif'=>array(),'ID_user'=>array(),'notif_name'=>array(),'notif_description'=>array(),'notif_lvl'=>array(),'notif_date'=>array(),'notif_type'=>array(),'notif_statut'=>array());
	$i=0;
	 while ($donnees = $request->fetch()){
		 $arrayOfData['ID_notif'][$i]=$donnees['ID_notif'];
		 $arrayOfData['ID_user'][$i]=$donnees['ID_user'];
		 $arrayOfData['notif_name'][$i]=$donnees['notif_name'];
		 $arrayOfData['notif_description'][$i]=$donnees['notif_description'];
		 $arrayOfData['notif_lvl'][$i]=$donnees['notif_lvl'];
		 $arrayOfData['notif_date'][$i]=$donnees['notif_date'];
		 $arrayOfData['notif_type'][$i]=$donnees['notif_type'];
		 $arrayOfData['notif_statut'][$i]=$donnees['notif_statut'];
		 $i++;
	 }
	return $arrayOfData;

	
}


function update_db_notification ($user_id, $notif_id, $notif_description, $notif_state, $notif_name, $notif_lvl, $notif_type,  $db ) {
		// Cette fonction prend en argument les valeurs obtenues du formulaire de modification de la notification ainsi que la DB, et applique la modification
		// de la ligne de la DB correspondant à l'ID de la notification indiquée.
		// Pour appeller cette fonction utiliser cette ligne de code :
		// update_db_notification ($_POST['user_id'], $_POST['alert_id'], $_POST['description'], $_POST['alert_state'], $_POST['alert_name'], $_POST['alert_lvl'], $_POST['alert_type'], $data['notif_date'], $db );
		// On prépare la requete SQL de modification du contenu d'une ligne de la DB, déterminée par son ID_notif.
	    $req = $db->prepare("UPDATE `notification` SET `ID_user`=?,`notif_description`=?,`notif_name`=?,`notif_statut`=?,`notif_type`=?,`notif_lvl`=? WHERE `ID_notif`=?");
		// On execute la requete avec les données rentrées en arguments de la fonction.
	    $req->execute(array($user_id,$notif_description,$notif_name,$notif_state,$notif_type,$notif_lvl,$notif_id));
	}  


function getAlertData($bdd,$id){
	$req = $bdd->query('SELECT * FROM notification WHERE ID_notif=" '.$id.'"');
        $donnees = $req->fetch();
        return $donnees;
	
}
	
	
	
	
function getAlertCategories($bdd){
    $reponse = $bdd->query('SELECT * FROM alert_type');
    $dataArray=array("id_alert_type"=>array(),"name_alert_type"=>array());
    $i=0;
    while ($donnees = $reponse->fetch())
    {
        $dataArray['id_alert_type'][$i]=$donnees['id_alert_type'];
        $dataArray['name_alert_type'][$i]=$donnees['name_alert_type'];
        
        $i++;
        
    }
    return $dataArray;
    
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>