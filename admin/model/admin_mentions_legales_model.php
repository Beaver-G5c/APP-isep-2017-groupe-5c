<?php

$requete = $bdd->query("SELECT * FROM legal_notice");
$donnees = $requete->fetch();


if(isset($_POST['valider'])){
    $requeteajouter = $bdd->prepare("UPDATE legal_notice SET title = ?, body = ? WHERE ID = 1");
    $requeteajouter->execute(array($_POST['titre_mentions_legales'],$_POST['mentions_legales'],));
}
?>