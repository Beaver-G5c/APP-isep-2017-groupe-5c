<?php
/* Author : Thibpffr
 version : 1.3
 date : 29/11
 */?>
	<div class='cadre_connection'>
	<h1 class='connexion_titre'>CONNEXION</h1>
	<form method='POST' action='' >
		<label class='connexion_identifiant'>Identifiant : </label><input type='text' name='login' placeholder='Ex : Jean28' autofocus required maxlength=255/><br><br>
		<label> Mot de passe : </label><input type='password' name='password' required maxlength=255/><br><br><br>
		<a class='connexion_lien' href='index.php?page=user_forgotten_password'>J'ai oublié mon mot de passe</a>
		<input class='connexion_valider' type='submit' name='submit' value='Valider' />
		</form>

	</div>