<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/
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

        <form method='POST' action='controller_mdpoublie.php'>
            <label>Réponse : <input type='text' name='reponse' class='reponse' placeholder='Ex:Gontrand'autofocus required maxlength=256/> </label><br>
            <label><input type='submit' name='submit' class='ajout' value='Ajout'/></label>
    
        </form>
       
    </div>
</body>