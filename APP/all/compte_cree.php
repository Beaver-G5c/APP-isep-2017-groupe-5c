<!-- ####################### cree par Pfeffer Thibault le 15/11/17 ########################### -->
<?php
  //include ('function_str_to_no_accent.php');

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


/*$nom=$_POST['nom'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$mot_de_passe=$_POST["mot_de_passe"];
//$question_secrete= str_to_no_accent(strtolower($_POST['question_secrete']));
//$reponse_secrete= str_to_no_accent(strtolower($_POST['reponse_secrete']));

//echo $reponse_secrete.' et '.$question_secrete;

$bdd->exec('INSERT INTO `user` ( `mot_de_passe`, `nom`, `telephone`, `email`, `question_secrete`, `reponse_secrete`, `admin`, `connecte`, `autorisation_admin`, `date_creation_compte`, `date_derniere_connexion`) VALUES ( :mot_de_passe, :nom, :telephone, :email, :question_secrete, :reponse_secrete, 0, 0, 0, NOW(), NULL)');





/*$req = $bdd->prepare('INSERT INTO user(nom, telephone, email, mot_de_passe) VALUES(:nom, :telephone,:email,:mot_de_passe)');
$req->execute(array(
    'mot_de_passe'=>$mot_de_passe,
	'nom' => $nom,
	'telephone'=>$telephone,
    'email'=> $email,
    'question_secrete'=>$_POST['question_secrete'],
    'reponse_secrete'=>$_POST['reponse_secrete'],
    
    
	));*/
$nom=$_POST['nom'];
$bdd->exec('INSERT INTO user3 (nom) VALUES ("thib5565656565656)');

echo 'Votre nom a bien été ajouté à la base de données';
?>