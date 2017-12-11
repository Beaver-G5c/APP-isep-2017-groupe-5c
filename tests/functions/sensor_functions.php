<?php

function add_a_device ($ID_room, $ID_type,$is_a_sensor)
{
	require ("../connect.php");
	$req=$bdd->prepare(" INSERT INTO `devices`(`ID_room`,`ID_type`,`device_creation_date`,`is_a_sensor`) VALUES(:ID_room, :ID_type,NOW(),:is_a_sensor)");
	
	
	$req-> execute(array(
	'ID_room'=>$ID_room,
	'ID_type'=>$ID_type,
	'is_a_sensor'=>$is_a_sensor
	));

	
}

add_a_device (3,5,0);
