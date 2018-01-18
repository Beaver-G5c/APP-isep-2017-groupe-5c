<?php

	$bdd=new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
    $req=$bdd->prepare("INSERT INTO `test_sql`(`ID`, `nom`, `texte`, `Surprise`) VALUES (?,?,?,?)");
    $req->execute(array(1,"Surprise!", "How about a magic trick ?","C'est l'histoire de trois petits cochons..."));


?>