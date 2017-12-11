<?php

empty ($_POST['reveil']);
empty ($_POST['chauffer']);

if (isset($_POST['reveil']))
{	require('gestion_manu_model.php');
	define_reveil($_POST['heure'],$_POST['minutes']);
	echo'<p class="notif"><span>L horaire du réveil a été enregistré !</span></p>';
	}

elseif (isset($_POST['chauffer'])) 
{	require('gestion_manu_model.php');
	define_chauffer($_POST['temperature']);
	echo'<p class="notif"><span>La température a été enregistrée !</span></p>';
}

{
	require ('gestion_manuelle.php');
}
