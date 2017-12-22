<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/

require('../../functions/security_functions.php');
require('../../functions/function_user.php');


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
		require('../view/subscribe_view.php');
		
			
		}
	


	else
		{
		require ('../model/subscribe_model.php');
		// appel a la fonction situee dans subscribe_model3.php
		echo is_login_free($_POST['name']);
		add_user(input_securisation($_POST['name']),input_securisation($_POST['email']),input_securisation($_POST['password']),input_securisation($_POST['telephone']),input_securisation($_POST['secret_question']),input_securisation($_POST['secret_answer']),0,0);
	
	
	 	}
	}


else
	// sinon on affiche le formulaire a remplir
	{
		require('../view/subscribe_view.php');
		
    }
?>