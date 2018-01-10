<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/
require('../connect.php');

require($nomDossier.'functions/security_functions.php');
require($nomDossier.'functions/function_user.php');

empty ($_POST['submit']);
// on vide la variable submit pour etre sur


if (isset($_POST['submit']))
	
    {
	
	//------- on verifie si le name est bien libre !
	
	if (!is_login_free($_POST['name']))
		 
		
		// le login est deja pris on reaffiche le formulaire
		{
		
		empty($_POST['name']);
		empty($_POST['submit']);
		echo 'le login est déja pris !';
		require ($nomDossier.'view/add_user_view.php');
		
			
		}
	


	else
		{
		require ($nomDossier.'model/add_user_model.php');
		
		
		// appel a la fonction situee dans subscribe_model3.php
		add_user(input_securisation($_POST['name']),input_securisation($_POST['email']),input_securisation($_POST['password']),input_securisation($_POST['telephone']),input_securisation($_POST['secret_question']),input_securisation($_POST['secret_answer']),0,0,input_securisation($_POST['insta']));
		
		
		// on verifie que l'install number est libre 
		
		
		
		if (check_install_number_is_free(input_securisation($_POST['insta']),get_id_from_name(input_securisation($_POST['name'])))){
			
			// on est dans ce cas si l'install number fonctionne ducoup la fonction ajoute l'id de l'user dans la table install number
			// ensuite on le notifie a l'admin
			require ($nomDossier.'view/add_user_view.php');
			view_user_added();
			// redirection vers la liste des utilisateurs 
			?>
			
			<script type="text/javascript">
        	window.location.href = '<?php echo ($nomwamp."index.php"); ?> ';
       		</script>
       		<?php 
		}
		
		else{
			// on est dans ce cas si l'install number est deja pris ou si il n'existe pas
		// par conséquent on supprime l'user qui vient d'etre inscrit car il n'a pas de numéro d'installation ou celui-ci ne fonctionne pas
			
			echo ("Le numéro d'installation ne fonctionne pas");
			
			dropUser(get_id_from_name(input_securisation($_POST['name'])));
			require ($nomDossier.'view/add_user_view.php');
			}
	
	 	}
	}


else
	// sinon on affiche le formulaire a remplir
	{
		require ($nomDossier.'view/add_user_view.php');
		
    }
?>
