<?php
/* Author : Thibpffr
 version : 1.3
 date : 29/11
 */

function subscribeForm(){?>

    
    <div class='cadre_subscribe'>
    <h1 class='titre_subscribe'>INSCRIPTION</h1>
    
    
        <form method='POST' action='' >
			<p> Les champs munis d'une étoile sont à remplir obligatoirement !</p>
            <label>Nom* : <input type='text' name='name' class='nom_subscribe' placeholder='Ex:Jean 'autofocus required maxlength=256/> </label><br>
            <label>Téléphone* : <input type='tel' name='telephone' class='tel_subscribe' placeholder=' Ex:07.50.40.32.49'required/></label><br>
            <label>Adresse e-mail* : <input type='email'name='email' class='adresse_subscribe' placeholder='Ex:thibault@poivre.eu' required maxlength=256/></label><br>
            <label>Numéro d'installation* : <input type='tel' name='insta' class='insta_subscribe' placeholder=' Ex:07504049'required/></label><br>
            <label>Mot de passe* :<input type='password' name='mdp' size='21' class='mdp_subscribe' placeholder='******'required maxlength=256 /></label>
            <br><br>
            <label> Question secrète* : <input type='text' class='question_subscribe' name= 'secret_question' size='49' placeholder='quel est le nom de jeune fille de ma mère ?'required maxlength=255/></label><br>
            <label>Reponse* :  <input type='text' class='rep_subscribe' name='secret_answer' placeholder='Ferraz' required maxlength=256/></label><br>
            <br>
            <label><input type='checkbox' required/><span class='span_subscribe'>J'accepte les <a href='cgu.html'>CGU</span></a></label>
            <label><input type='submit' name='submit' class='inscription_subscribe' value='Inscription'/></label>
    
        </form>
        </div>
       
<?php }?>
