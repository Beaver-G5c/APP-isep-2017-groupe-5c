<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/
?>

  
    <h1 class='nouveau_mdp_titre'>Nouveau mot de passe</h1>
    <div id='new_mdp'>
        <p> Quel sera votre nouveau mot de passe? <br/></p>

        <form method='POST' action=''>
            <label>Mot de passe : <br><input type='password' name='motdepasse' class='reponse' placeholder='Ex:********'autofocus required maxlength=256/> </label><br>
            <label>Vérification : <br><input type='password' name='motdepasse2' class='reponse' placeholder='Ex:********'autofocus required maxlength=256/> </label><br>
            <label><input type="hidden" value="<?php echo($_POST['reponse']);?>"  name="reponse" id="text2" /></label>
            <label><input type='submit' name='submit3' class='ajout' value='Ajout'/></label>
    
        </form>
       
    </div>
