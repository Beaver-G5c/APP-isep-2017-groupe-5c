

	

	
	
	
	<form method="POST" action="">


	<input type='submit'  value='Ajouter' name='submit'/>
	
	</form>
<?php





function display_list($bdd){
    
    ?>

<table>
	<tr>
		<th> ID</th>
		<th> Nom</th>
		<th> Email</th>
		<th> Téléphone</th>
		<th> Création du compte</th>
		<th> Dernière connexion </th>
		<th> Dernière acceptation des CGU</th>
		<th> Est connecté</th>
		<th> Est admin</th>
		<th> Autorisation admin</th>
	</tr>
	
   
       <?php
       require("admin/model/admin_user_list_model.php");
	   while ($donnees = $req->fetch()){
		  
	   ?>
		<tr>
		<td><?php echo ($donnees['ID_user']); ?></td>
		<td><?php echo ($donnees['name'] );?></td>
		<td> <?php echo ($donnees['email']); ?></td>
		<td> <?php echo ($donnees['phone_number']); ?></td>
		<td> <?php echo ($donnees['account_creation_date']); ?></td>
		<td> <?php echo ($donnees['last_connection_date']); ?></td>
		<td> <?php echo ($donnees['last_cgu_acceptance']); ?></td>
		<td> <?php echo ($donnees['is_connected']); ?></td>
		<td> <?php echo ($donnees['is_admin']); ?></td>
		<td> <?php echo ($donnees['admin_authorization']); ?></td>
		<td><form method="POST" action="" >
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user"  /></label>
			<input type="submit" value="Supprimer" name="submit"/>
			<input type="submit" value="Modifier" name="submit"/>
			
		</form>
		</td>
		
	</tr>
	   
	   
	   
   
   

<?php }
}
?>


	
	



</table>
</body>
</html>
<?php 
function updateUserForm($donnees)
	{
   
	?>
	
	<form method="POST" action="">
			
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user"  /></label>
			<label> Nom :</label><input type="text" id="name" name="name" value="<?php echo( $donnees['name']);?>" autofocus required maxlength=256 />
			<label> Email :</label><input type="email" id="email" name="email" value="<?php echo( $donnees['email']);?>" required maxlength=256/>
			<label> Num�ro de t�l�phone :</label><input type="tel" id="phone_number" name="phone_number" value="<?php echo( $donnees['phone_number']);?>" />
			<label> Est admin :</label><input type="checkbox" name="is_admin" value=' <?php if ($donnees['is_admin']==1){echo ("checked=checked");} ?>' />
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user2"  /></label>
			<label><input type='submit' name='submit_2' class='update' value='update'/></label>
	</form>
	<?php 
	}
	?>
	
	