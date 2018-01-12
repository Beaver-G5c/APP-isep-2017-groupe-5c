<?php

	require ('admin_alert_model.php');

	require('admin_alert_view.php');






	if (isset($_POST['valider'])){

		add_alert($_POST['description'], "Non traitee", $_POST['name'], $_POST['id_user_target'], $_POST['type_alert'], $_POST['lvl_alert']);

	}
  	

?>
