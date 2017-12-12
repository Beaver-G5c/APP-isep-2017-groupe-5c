<?php
	
			
    
    	require ("connect.php");
		

function add_home ($adress, $postal_code,$town,$password,$state,$id_user){
		 
	// On ajoute les nouvelles infos dans la bdd 
		echo 'blaaa';
		$req = $bdd->prepare('INSERT INTO home (adress, postal_code, town, password, state) VALUES (:adress, :postal_code, :town, :password, :state)');
		$req-> execute (array(
			'adress'=>$adress, 
			'postal_code'=>$postal_code, 
			'town'=>$town, 
			'password'=>$password, 
			'state'=>$state));	



				echo 'Votre installation a bien été prise en compte';
	}

		

		?>
