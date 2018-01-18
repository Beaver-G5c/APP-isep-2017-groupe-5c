<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/

include '../header-v2.2.html';
require '../Fonctions/connect.php';
?>

   <!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link rel='stylesheet' href='../style/style_mdpoublie.css'/>
        <title>Mot de passe oublié</title>
    </head>
    <body>
    <h1>Mot de passe oublié</h1>
    <div>
        <p> Quel est votre nom d'utilisateur? <br/></p>
        <p> Veuillez répondre a la question secrete <br/></p>
        <p> 
            <?php $reponse = $bdd->query('SELECT secret_question FROM '); ?>
            <?php while ($donnees = $reponse->fetch())
            {
            echo ($donnees['secret_question']); 
            }
            ?>
            

        </p>
        <form method='POST' action='controller_mdpoublie.php'>
            <label>Réponse : <input type='text' name='reponse' class='reponse' placeholder='Ex:ma belle mere'autofocus required maxlength=256/> </label><br>
            <label><input type='submit' name='submit' class='ajout' value='Ajout'/></label>
    
        </form>
       
    </div>
</body>