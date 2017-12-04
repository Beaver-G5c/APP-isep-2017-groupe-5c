<?php
// ####################### cree par Pfeffer Thibault le 16/11/17 ########################### -->
$_SESSION['nom']=$_POST['nom'];
echo 'le nom de session est '.$_SESSION['nom'];
// cette page a pour objet de renvoyer vers la gestion manuelle si le mot passe et le login correspondent l'un
// à l'autre et existe dans la base de données, sinon cette page renverra vers la page de connexion 



// connexion a la base de données des user

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}




?>