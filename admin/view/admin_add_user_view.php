<?php 
/* Author : Thibpffr
version : 1.3
date : 29/11
*/

?>

      
	<?php require ($nomDossier."view/header.php"); ?>
    <img src='logo2.png' alt='Logo' />
    <h1>Ajouter un utilisateur</h1>
    <div>
    <p> Les champs munis d\'une étoile sont à remplir obligatoirement !</p>
        <form method='POST' action=''>
			
            <label>Nom* </label> : <input type='text' name='name' class='nom' placeholder='Ex:Jean 'autofocus required maxlength=256/> <br/>
				<label>Téléphone* : </label><input type='tel' name='telephone' class='tel' placeholder=' Ex:07.50.40.32.49'required/><br/>
				<label>Adresse e-mail* : </label> <input type='email'name='email' class='adresse' placeholder='Ex:thibault@poivre.eu' required maxlength=256/><br>
				<label>Numéro d'installation* : </label><input type='tel' name='insta' class='insta' placeholder=' Ex:07504049'required/><br/>
            <label>Mot de passe* :<input type='password' name='password' size='21' class='mdp' placeholder='******'required maxlength=256 /></label>
            <br/><br/>
				<label> Question secrète* : </label><input type='text' class='question' name= 'secret_question' size='49' placeholder='quel est le nom de jeune fille de ma mère ?'required maxlength=255/><br/>
            <label>Reponse* :  <input type='text' class='rep' name='secret_answer' placeholder='Ferraz' required maxlength=256/></label><br/>
            <br>
			<label>Admin</label><input type='checkbox'  name ='is_admin' /><br/>
		<label><span>J'accepte les <a href='cgu.html'>CGU</span></a></label><input type='checkbox' required/>
            <input type='submit' name='submit_add_user' class='inscription' value='Inscription'/>
			
    
        </form>
       
    </div>
    </body>



</html>

<?php

function view_user_added()
{
	echo('l\'utilisateur a été ajouté à la base ');
}
?>