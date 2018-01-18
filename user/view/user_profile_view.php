<h1>Votre profil</h1>

<?php 

function displayInfos($donnees){ ?>
	

		<p><span> Votre ID : </span><?php echo ($donnees['ID_user']); ?></p>
        <p><span> Votre nom : </span><?php echo ($donnees['name'] );?></p>
        <p><span> Votre Email : </span><?php echo ($donnees['email']); ?></p>
        <p><span> Téléphone : </span><?php echo ($donnees['phone_number']); ?></p>

<?php } ?>

<?php

function modifForm(){?>
	<form method="POST" action="controler/modif_profil.php" >
		<input type="submit" value="Modifier" name="submit"/></br>
			<input type="submit" value="Modifier le mot de passe" name="submit"/>
     </form>
<?php } ?>