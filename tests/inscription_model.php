<?php



// a ajouter : gestion du type de données type numéro de téléphone ou aussi les questions et réponses secrètes

function add_user($name,$email,$password,$telephone,$secret_question,$secret_answer){

	try
    	{
	   $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
    	}
    
    catch (Exception $e)
    	{
        	die('Erreur : ' . $e->getMessage());
    
    	}
	$connected=0;
	$admin_authorization=0;
	$is_admin=0;
	$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$req=$bdd->prepare(" INSERT INTO `users3`( `name`,`email`,`password`,`telephone`,`connected`,`admin_authorization`,`is_admin`,`account_creation_date`,`secret_question`,`secret_answer`) VALUES (:name,:email,:password,:telephone,:connected,:admin_authorization,:is_admin,NOW(),:secret_question,:secret_answer)");
	$req-> execute(array(
	'name'=>$name,
	'email'=>$email,
	'password'=>$pass_hach,
	'telephone'=>$telephone,
	'connected'=>$connected,
	'admin_authorization'=>$admin_authorization,
	'is_admin'=>$is_admin,
	'secret_question'=>$secret_question,
	'secret_answer'=>$secret_answer));
	
	
	}

?>
