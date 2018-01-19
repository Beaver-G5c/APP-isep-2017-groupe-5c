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
        <title>Changement de mot de passe</title>
    </head>
    <body>
    <h1>Nouveau mot de passe</h1>
    <div>
        <p> Quel sera votre nouveau mot de passe? <br/></p>

        <form method='POST' action='controller_mdpoublie.php'>
            <label>Mot de passe : <input type='password' name='motdepasse' class='reponse' placeholder='Ex:********'autofocus required maxlength=256/> </label><br>
            <label>Vérification : <input type='password' name='motdepasse2' class='reponse' placeholder='Ex:********'autofocus required maxlength=256/> </label><br>
            <label><input type="hidden" value="<?php echo($_POST['reponse']);?>"  name="reponse" id="text2" /></label>
            <label><input type='submit' name='submit3' class='ajout' value='Ajout'/></label>
    
        </form>
       
    </div>
</body>