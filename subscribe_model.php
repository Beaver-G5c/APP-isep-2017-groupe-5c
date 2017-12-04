<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/



// les variables is_admin et admin_autho sont modulables pour pouvoir reutiliser la fonction pour ajouter les admin 
// la fonction initialise admin_authorization à 0 pour etre sur qu'elle soit bien à 0 et pas NULL

function add_user($name,$email,$password,$phone_number,$secret_question,$secret_answer,$is_admin,$admin_authorization){
	
	
//-----------------connexion a la base de données users -------------------
	try
    	{
	   $bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
    	}
    
    catch (Exception $e)
    	{
        	die('Erreur : ' . $e->getMessage());
    
    	}
	// --------------------------hashage du mdp -----------------------------
	$password= password_hash ($password,PASSWORD_BCRYPT);
	
	
	// -----------------------preparation de la requete---------------------
	$req=$bdd->prepare(" INSERT INTO `users`(`name`,`email`,`password`,`phone_number`,`secret_question`,`secret_answer`,`account_creation_date`,`is_admin`,`admin_authorization`,`last_cgu_acceptance`) VALUES(:name,:email,:password,:phone_number,:secret_question,:secret_answer,NOW(),:is_admin,:admin_authorization,NOW())");
	
	
	// --------------------execution de la requete ---------------------------
	
	$req-> execute(array(
	'name'=>$name,
	'email'=>$email,
	'password'=>$password,
	'phone_number'=>$phone_number,
	'secret_question'=>$secret_question,
	'secret_answer'=>$secret_answer,
	'is_admin'=>$is_admin,
	'admin_authorization'=>$admin_authorization));
}

// il faut rajouter un controle sur les login pour pas qu'il y ait des doublons sinon ca plante