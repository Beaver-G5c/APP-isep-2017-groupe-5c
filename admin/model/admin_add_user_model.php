<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/




// les variables is_admin et admin_autho sont modulables pour pouvoir reutiliser la fonction pour ajouter les admin 
// la fonction initialise admin_authorization à 0 pour etre sur qu'elle soit bien à 0 et pas NULL

function add_user($bdd,$name,$email,$password,$phone_number,$secret_question,$secret_answer,$is_admin,$admin_authorization,$install_number){
	
	
//-----------------connexion a la base de données users -------------------
	
	// --------------------------hashage du mdp -----------------------------
	$password= password_hash ($password,PASSWORD_BCRYPT);
	
	
	
	
	// -----------------------preparation de la requete table users---------------------
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



function check_install_number_is_free($install_number,$id_user,$bdd)
{
    // cette fonction renvoie 1 si l'install number est libre et  ajoute l'id user dans la table install number et renvoie 0 si l'install number n'existe pas ou si il est déja pris
    
    
    
    
    $reponse=$bdd -> query('SELECT id_user FROM install_number WHERE install_number="'.$install_number.'" ');
    
    
    while ($donnees = $reponse->fetch()){
        
        
        if ($donnees['id_user']!=NULL)
        
        {
            
            return 0;
        }
        else
        {
            // dans ce cas on ajoute l'id dans la table
            $req=$bdd->prepare(" UPDATE `install_number` SET id_user=:id WHERE install_number= :install_number");
            $req-> execute(array('id'=>$id_user,'install_number'=>$install_number));
            
            
            return 1;
        }
    }
}




    
   



function get_id_from_name($name,$bdd)
{
	
	
		
	
	
	$req = $bdd->query('SELECT ID_user FROM users WHERE name="'.$name.'" ');
	while ($donnees = $req->fetch()){
		
		

		return ($donnees['ID_user']);
	}
}

function dropUser($id_user,$bdd)
{
	
	$reponse=$bdd -> query('DELETE FROM users WHERE ID_user="'.$id_user.'" ');
}
	