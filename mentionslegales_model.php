<?php

$bdd = new PDO('mysql:host=localhost;dbname=app', 'root', 'root');
$requete = $bdd->query("SELECT * FROM legal_notice"); 
$donnees = $requete->fetch();






?>