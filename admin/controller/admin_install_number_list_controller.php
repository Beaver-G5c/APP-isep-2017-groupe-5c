<?php
/* Author : Thibpffr
version : 1.3
date : 29/11
*/






require ($localisation.'admin/model/admin_install_number_list_model.php');


if (isset($_POST['submit_install_number']))
	{
		
		// appel a la fonction situee dans subscribe_model3.php
		add_number($_POST['install_number'],$bdd);
		
		require($localisation.'admin/view/admin_install_number_list_view.php');
	
	
	}
	


else
	// sinon on affiche le formulaire a remplir
	{
		require($localisation.'admin/view/admin_install_number_list_view.php');
		
    }
?>