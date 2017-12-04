<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=app2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$bdd->execute('CREATE TABLE `users2` (
`id_user` SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NOT NULL ,
`email` VARCHAR( 255 ) NOT NULL ,
`password` VARCHAR( 255 ) NOT NULL ,
`telephone` VARCHAR( 255 ) NOT NULL ,
`connecte` BOOLEAN NOT NULL ,
`autorisation_admin` BOOLEAN NOT NULL ,
`admin` BOOLEAN NOT NULL ,
`account_creation` DATETIME NOT NULL ,
`last_connection` DATETIME NOT NULL ,
`secret_question` VARCHAR( 255 ) NOT NULL ,
`secret_answer` VARCHAR( 255 ) NOT NULL 
) ;
 ');


echo'table cree';

?>