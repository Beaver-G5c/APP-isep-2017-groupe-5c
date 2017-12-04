<?php
// ####################### cree par Pfeffer Thibault le 16/11/17 ########################### -->
 
session_start();




echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style3.css" />
        <title>Connexion</title>
    </head>

    <body>';
include ('formulaire_connexion.html');
// on mémorise le nom de l'utilisateur dans la session pour pouvoir l'afficher dans le header
//$_SESSION['nom']=$_POST['nom'];
//echo $_SESSION['nom'];
        
echo '    
</body>
</html>';



?>