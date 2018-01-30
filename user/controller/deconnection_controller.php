
<?php 


// on passe l'user en mode déconnecté

turn_user_into_disconnected( $_SESSION['ID_user'],$bdd);
	
	
// on détruit la session 
session_destroy();

// on affiche un merci au revoir
echo ('merci et au revoir <br>');
echo ("<a href='index.php'><input type='button' value='Retour vers la page Acceuil'></a>");




