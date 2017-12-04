<?php 
/* Author : Thibpffr
version : 1.3
date : 29/11
*/
echo "

      <!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link rel='stylesheet' href='../style/style_subscribe.css' />
        <title>Inscription</title>
    </head>

    <body>

    <img src='logo2.png' alt='Logo' />
    <h1>INSCRIPTION</h1>
    <div>
    <p> Les champs munis d\'une étoile sont à remplir obligatoirement !</p>
        <form method='POST' action=''>
            <label>Nom* : <input type='text' name='name' class='nom' placeholder='Ex:Jean 'autofocus required maxlength=256/> </label><br>
            <label>Téléphone* : <input type='tel' name='telephone' class='tel' placeholder=' Ex:07.50.40.32.49'required/></label><br>
            <label>Adresse e-mail* : <input type='email'name='email' class='adresse' placeholder='Ex:thibault@poivre.eu' required maxlength=256/></label><br>
            <label>Numéro d'installation* : <input type='tel' name='insta' class='insta' placeholder=' Ex:07504049'required/></label><br>
            <label>Mot de passe* :<input type='password' name='password' size='21' class='mdp' placeholder='******'required maxlength=256 /></label>
            <br><br>
            <label> Question secrète* : <input type='text' class='question' name= 'secret_question' size='49' placeholder='quel est le nom de jeune fille de ma mère ?'required maxlength=255/></label><br>
            <label>Reponse* :  <input type='text' class='rep' name='secret_answer' placeholder='Ferraz' required maxlength=256/></label><br>
            <br>
            <label><input type='checkbox' required/><span>J'accepte les <a href='cgu.html'>CGU</span></a></label>
            <label><input type='submit' name='submit' class='inscription' value='Inscription'/></label>
    
        </form>
       
    </div>
    </body>

";

?>