<?php
/* Author : Thibpffr
 version : 1.3
 date : 29/11
 */

?>

      
<?php function addUserForm(){?>
    <div class='cadre_admin_add_user'>
    <h1 class='titre_admin_add_user'>Ajouter un utilisateur</h1>
    
    <p> Les champs munis d'une étoile sont à remplir obligatoirement !</p>
        <form method='POST' action=''>
			
            <label>Nom* </label> : <input type='text' name='name' class='nom_subscribe' placeholder='Ex:Jean 'autofocus required maxlength=256/> <br/>
			<label>Téléphone* : </label><input type='tel' name='telephone' class='tel_subscribe' placeholder=' Ex:07.50.40.32.49'required/><br/>
			<label>Adresse e-mail* : </label> <input type='email'name='email' class='adresse_subscribe' placeholder='Ex:thibault@poivre.eu' required maxlength=256/><br>
			
            <label>Mot de passe* :<input type='password' name='password' size='21' class='mdp_subscribe' placeholder='******'required maxlength=256 /></label>
            <br/><br/>
			<label> Question secrète* : </label><input type='text' class='question_subscribe' name= 'secret_question' size='49' placeholder='quel est le nom de jeune fille de ma mère ?'required maxlength=255/><br/>
            <label>Reponse* :  <input type='text' class='rep_subscribe' name='secret_answer' placeholder='Ferraz' required maxlength=256/></label><br/>
            <br>
			<label>Admin</label><input type='checkbox'  name ='is_admin' /><br/>
		
            <input type='submit' name='submit_action' class='inscription_subscribe' value='Inscription'/>
			
    
        </form>
       
    </div>
<?php }?>

<?php

function view_user_added()
{
	echo('l\'admin a été ajouté à la base ');
}

function alreadyTakenLogin()
{
    echo ('Le login est déja pris !');
}

function installNumberProblem(){
    echo ("Le numéro d'installation ne fonctionne pas");
}
?>