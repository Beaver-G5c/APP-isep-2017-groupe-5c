<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/




if (isset($_POST['submit_add_user']))
	
    {
	
	//------- on verifie si le name est bien libre !
	
	if (!is_login_free($_POST['name']))
		 
		
		// le login est deja pris on reaffiche le formulaire
		{
		
		empty($_POST['name']);
		empty($_POST['submit']);
		echo 'le login est déja pris !';
		require ($localisation.'admin/view/admin_add_user_view.php');
		
			
		}
	


	else
		{
		require ($localisation.'admin/model/admin_add_user_model.php');
		
		if (isset($_POST['is_admin']))
		{
			$is_admin=1;
		}
		
		else 
		{
			$is_admin=0;
		}
		// appel a la fonction situee dans subscribe_model3.php
		add_user(input_securisation($_POST['name']),input_securisation($_POST['email']),input_securisation($_POST['password']),input_securisation($_POST['telephone']),input_securisation($_POST['secret_question']),input_securisation($_POST['secret_answer']),$is_admin,0,input_securisation($_POST['insta']));
		
		
		// on verifie que l'install number est libre 
		
		
		
		if (check_install_number_is_free(input_securisation($_POST['insta']),get_id_from_name(input_securisation($_POST['name'])))){
			
			// on est dans ce cas si l'install number fonctionne ducoup la fonction ajoute l'id de l'user dans la table install number
			// ensuite on le notifie a l'admin
		    require ($localisation.'admin/view/admin_add_user_view.php');
			view_user_added();
			// redirection vers la liste des utilisateurs 
			?>
			
			
       		<?php 
		}
		
		else{
			// on est dans ce cas si l'install number est deja pris ou si il n'existe pas
		// par consÃ©quent on supprime l'user qui vient d'etre inscrit car il n'a pas de numÃ©ro d'installation ou celui-ci ne fonctionne pas
			
			echo ("Le numéro d'installation ne fonctionne pas");
			
			dropUser(get_id_from_name(input_securisation($_POST['name'])));
			require ($localisation.'admin/view/admin_add_user_view.php');
			}
	
	 	}
	}


else
	// sinon on affiche le formulaire a remplir
	{
		require ($localisation.'admin/view/admin_add_user_view.php');
		
    }
?>