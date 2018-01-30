<?php
require('../connect.php');
$requete = $bdd->query("SELECT * FROM temperature_sensor_last_hour");
$requete2 = $bdd->query("SELECT * FROM temperature_sensor_last_24hours");
$requete3 = $bdd->query("SELECT * FROM temperature_sensor_last_7days");
$requete4 = $bdd->query("SELECT * FROM temperature_sensor_last_30days");
$donnees = $requete->fetch();
?>