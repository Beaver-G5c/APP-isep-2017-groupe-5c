<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <link rel="stylesheet" href="style.css" />

        <title>Premiers tests du CSS</title>

    </head>


    <body>
<?php
    require ("../connect.php");
    require ($nomDossier.'view/header.php');

function dropUserView()
{
	echo ("L'utilisateur a été supprimé");?>
	<a href="../index.php">Liste des Utilisateurs</a>

	<?php
	
}
	?>
	
	
<?php

function updateUserForm($donnees)
	{
    require("../connect.php");
	?>
	<a href="../index.php">Liste des Utilisateurs</a>
	<form method="POST" action="<?php echo ($nomwamp."controller/action2.php") ; ?>">
			
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user"  /></label>
			<label> Nom :</label><input type="text" id="name" name="name" value="<?php echo( $donnees['name']);?>" autofocus required maxlength=256 />
			<label> Email :</label><input type="email" id="name" name="email" value="<?php echo( $donnees['email']);?>" required maxlength=256/>
			<label> Numéro de téléphone :</label><input type="tel" id="phone_number" name="phone_number" value="<?php echo( $donnees['phone_number']);?>" />
			<label> Est admin :</label><input type="checkbox" id="name" name="is_admin" <?php if ($donnees['is_admin']==1){echo ("checked=checked");} ?> />
			<label><input type="hidden" value="<?php echo("Modifier"); ?>"  name="submit"  /></label>
			<label><input type='submit' name='submit_action' class='update' value='update'/></label>
	</form>
	<?php 
	}
	?>
	
	</body>
</html>
