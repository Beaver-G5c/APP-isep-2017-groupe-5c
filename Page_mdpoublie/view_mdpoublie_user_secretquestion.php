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
        <p> Veuillez répondre a votre question secrete <br/></p>
        <p> 
            
            <?php
            $nom = $_POST['reponse'];
            $reponse = $bdd->query("SELECT * FROM `users` WHERE name ='". $nom."'"); 
            while ($donnees = $reponse->fetch())
            {
                 echo ($donnees['secret_question']); 
            }
            ?>
            

        </p>
        <form method='POST' action='controller_mdpoublie.php'>
            <label>Réponse : <input type='text' name='reponse2' class='reponse' placeholder='Ex:ma belle mere'autofocus required maxlength=256/> </label><br>
            <label><input type="hidden" value="<?php echo($_POST['reponse']);?>"  name="reponse" id="text2" /></label>
            <label><input type='submit' name='submit2' class='envoyer' value='Envoyer'/></label>
    
        </form>
       
    </div>
</body>
    
    
    