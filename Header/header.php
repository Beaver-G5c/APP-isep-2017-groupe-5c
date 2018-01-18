<?php  
	
	if (isset($_SESSION['is_admin'])) {
	
		if ($_SESSION['is_admin']==1) {
			include 'header_admin.html';
		}

		if ($_SESSION['is_admin'] == 0) {
			include 'header_user.html';
		}

	}

	else {
		include 'header_deco.html';
	}


?>

