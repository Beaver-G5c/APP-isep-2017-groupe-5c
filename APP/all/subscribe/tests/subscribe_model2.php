<?php


function add_user($name){

	try
    	{
	   $bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
    	}
    
    catch (Exception $e)
    	{
        	die('Erreur : ' . $e->getMessage());
    
    	}
	echo 'le nom est '.$name;
	
	$req=$bdd->prepare(' INSERT INTO users (name) VALUES (:name)');
	$req-> execute (array('name'=>$name ));
	
	
	/*$req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req->execute(array(
	'nom' => $nom,
	'possesseur' => $possesseur,
	'console' => $console,
	'prix' => $prix,
	'nbre_joueurs_max' => $nbre_joueurs_max,
	'commentaires' => $commentaires
	));
	$req-> execute(array(
	'name'=>$name));
	*/
}
	
?>