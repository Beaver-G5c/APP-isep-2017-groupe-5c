<?php

function set_cookies_connection($name,$password,$ID_user)
	{	
	setcookie('name_beaver', $name, time() + 365*24*3600);
	setcookie('password_beaver', $password, time() + 365*24*3600);
	setcookie('ID_user_beaver', $ID_user, time() + 365*24*3600);
	}	


