<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/
?>

   
    <h1>Mot de passe oublié</h1>
    <div id='question_secrete'>
        <p> Veuillez répondre a votre question secrete <br/></p>
        <p> 
            
            <?php
            secret_question($bdd,$_POST['reponse']); echo'?';
            
            ?>
            

        </p>
        <form method='POST' action=''>
            <label>Réponse : <input type='text' name='reponse2' class='reponse' placeholder='Ex:ma belle mere'autofocus required maxlength=256/> </label><br>
            <label><input type="hidden" value="<?php echo($_POST['reponse']);?>"  name="reponse" id="text2" /></label>
            <label><input type='submit' name='submit2' class='envoyer' value='Envoyer'/></label>
    
        </form>
       
    </div>

