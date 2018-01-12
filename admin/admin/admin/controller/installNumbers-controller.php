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
		require ($nomDossier.'model/installNumbers-model.php');
		// appel a la fonction situee dans subscribe_model3.php
		add_number($_POST['install_number']);
	
	
	}
	


else
	// sinon on affiche le formulaire a remplir
	{
		require($nomDossier.'view/installNumbers-view.php');
		
    }
?>