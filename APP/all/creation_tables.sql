CREATE TABLE `users3` (
`id_user` SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 ) NOT NULL ,
`email` VARCHAR( 255 ) NOT NULL ,
`password` VARCHAR( 255 ) NOT NULL ,
`telephone` VARCHAR( 255 ) NOT NULL ,
`connecte` BOOLEAN NOT 0 ,
`autorisation_admin` BOOLEAN NOT 0 ,
`admin` BOOLEAN NOT 0 ,
`account_creation` DATETIME NOT NULL ,
`last_connection` DATETIME NOT NULL ,
`secret_question` VARCHAR( 255 ) NOT NULL ,
`secret_answer` VARCHAR( 255 ) NOT NULL )
 
