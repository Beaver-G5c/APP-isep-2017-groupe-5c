<h1 class='profil_titre'>Votre profil</h1>

<?php 

function displayInfos($donnees){ ?>
	
    <div class='profil_div'>
		<p><span> Votre ID : </span><?php echo ($donnees['ID_user']); ?></p>
        <p><span> Votre nom : </span><?php echo ($donnees['name'] );?></p>
        <p><span> Votre Email : </span><?php echo ($donnees['email']); ?></p>
        <p><span> Téléphone : </span><?php echo ($donnees['phone_number']); ?></p>
    
<?php } ?>

<?php

function modifForm(){?>
	<form method="POST" action="" >
		<input type="submit" value="Modifier" name="submit"/><br>
		<input type="submit" value="Modifier le mot de passe" name="submit"/>
     </form>
</div>
<?php } ?>


<?php

function updateUserForm($donnees)
	{
   
	?>
	<div class='profil_div'>
	<form method="POST" action="">
			
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user"  /></label>
			<label> Nom :<br></label><input type="text" id="name" name="name" value="<?php echo( $donnees['name']);?>" autofocus required maxlength=256 /><br>
			<label> Email :<br></label><input type="email" id="email" name="email" value="<?php echo( $donnees['email']);?>" required maxlength=256/><br>
			<label> Numéro de téléphone :<br></label><input type="tel" id="phone_number" name="phone_number" value="<?php echo( $donnees['phone_number']);?>" /><br>
			
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user2"  /></label>
			<label><input type='submit' name='submit_2' class='update' value='update'/></label>
	</form>
</div>
	<?php } ?>


<?php
function modifPasswordForm (){?>
    <div class='profil_div'>
	<form method="POST" action=''>
		<label> Ancien Mot de passe :<br/></label><input type="password"  name="ex-password"  /><br/>
		<label> Nouveau Mot de passe :<br/></label><input type="password"  name="password1"  /><br/>
		<label> Confirmation :<br/></label><input type="password"  name="password2"  /><br/>
		<label><input type='submit' name='submit_password'  value='Modifier le mot de passe' /></label>
	</form>
</div>
	
<?php }

function refusePasswordChange()
{
	echo ('Les informations rentrées sont incohérentes');
}

