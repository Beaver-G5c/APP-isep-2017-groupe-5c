<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/



require ($localisation.'user/view/user_subscribe_view.php');

if (isset($_POST['submit']))
	
    {
	
	//------- on verifie si le name est bien libre !
	
	if (!is_login_free($_POST['name'],$bdd))
		 
		
		// le login est deja pris on reaffiche le formulaire
		{
		
		
		echo 'le login est déja pris !';
		subscribeForm();
		
			
		}
	


	else
		{
		require ($localisation.'user/model/user_subscribe_model.php');
		
		
		
		// appel a la fonction situee dans subscribe_model3.php
		add_user($bdd,input_securisation($_POST['name']),input_securisation($_POST['email']), input_securisation($_POST['mdp']),input_securisation($_POST['telephone']),input_securisation($_POST['secret_question']),input_securisation($_POST['secret_answer']),0,0,input_securisation($_POST['insta']));
		
		
		// on verifie que l'install number est libre 
		
		
		
		if (check_install_number_is_free($bdd,input_securisation($_POST['insta']),get_id_from_name($bdd,input_securisation($_POST['name'])))){
			
			// on est dans ce cas si l'install number fonctionne ducoup la fonction ajoute l'id de l'user dans la table install number
			
			
		
			// redirection vers la liste des utilisateurs 
			echo ("<a class=cadre_subscibe href='index.php?page=connection'>Se connecter avec ces nouveaux identifiants </a>");
			
		}
		
		else{
			// on est dans ce cas si l'install number est deja pris ou si il n'existe pas
		// par conséquent on supprime l'user qui vient d'etre inscrit car il n'a pas de numéro d'installation ou celui-ci ne fonctionne pas
			
			echo ("Le numéro d'installation ne fonctionne pas");
			
			dropUser($bdd,get_id_from_name($bdd,input_securisation($_POST['name'])));
			subscribeForm();
			}
	
	 	}
	}


else
	// sinon on affiche le formulaire a remplir
	{
		subscribeForm();
		
    }
?>