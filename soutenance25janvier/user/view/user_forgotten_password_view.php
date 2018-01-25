<?php function userPasswordChange(){?>

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
<?php }?>

<?php 

function secretQuestion(){?>
	
	
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

}