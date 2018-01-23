<?php

$bdd = (new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', 'root'));
$req = $bdd->query('SELECT * FROM catalogue');
$donnees = $req->fetch();



if(isset($_POST['valider_ajout_salle'])){
    require_once 'getinfoview.php';
    echo"ca marche";
    $bdd = (new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', 'root'));
    $req = $bdd->query('SELECT * FROM catalogue');
    $post_name_id=$_POST['name_id'];
    
    foreach ($post_name_id as $key=>$value){
        echo $value;
        echo $key;
        
        
        
        $requeteajouter = $bdd->prepare("INSERT INTO capteurs(id_sensor) VALUES('.$value.') ");
        $requeteajouter->execute();
        
        
        
        
        
        
        
        
        
        
    }}
    





?>