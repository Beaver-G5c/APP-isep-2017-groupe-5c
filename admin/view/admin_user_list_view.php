

	

	
	
	
	<form method="POST" action="">


	<input type='submit'  value='Ajouter' name='submit'/>
	
	</form>
<?php





function display_list($donnees){
    
    ?>

<table>
	<tr>
		<th> ID</th>
		<th> Nom</th>
		<th> Email</th>
		<th> T√©l√©phone</th>
		<th> Cr√©ation du compte</th>
		<th> Derni√®re connexion </th>
		<th> Derni√®re acceptation des CGU</th>
		<th> Est connect√©</th>
		<th> Est admin</th>
		<th> Autorisation admin</th>
	</tr>
	
   
       <?php
       
       for ($i=0;$i<count($donnees['ID_user']);$i++){
	   ?>
		<tr>
		<td><?php echo ($donnees['ID_user'][$i]); ?></td>
		<td><?php echo ($donnees['name'] [$i]);?></td>
		<td> <?php echo ($donnees['email'][$i]); ?></td>
		<td> <?php echo ($donnees['phone_number'][$i]); ?></td>
		<td> <?php echo ($donnees['account_creation_date'][$i]); ?></td>
		<td> <?php echo ($donnees['last_connection_date'][$i]); ?></td>
		<td> <?php echo ($donnees['last_cgu_acceptance'][$i]); ?></td>
		<td> <?php echo ($donnees['is_connected'][$i]); ?></td>
		<td> <?php echo ($donnees['is_admin'][$i]); ?></td>
		<td> <?php echo ($donnees['admin_authorization'][$i]); ?></td>
		<td><form method="POST" action="" >
			<label><input type="hidden" value="<?php echo($donnees['ID_user'][$i]); ?>"  name="id_user"  /></label>
			<input type="submit" value="Supprimer" name="submit"/>
			<input type="submit" value="Modifier" name="submit"/>
			
		</form>
		</td>
	</tr>
<?php }

?>
</table>
<?php }?>
<?php 
function updateUserForm($donnees)
	{
   
	?>
	
	<form method="POST" action="">
			
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user"  /></label>
			<label> Nom :</label><input type="text" id="name" name="name" value="<?php echo( $donnees['name']);?>" autofocus required maxlength=256 />
			<label> Email :</label><input type="email" id="email" name="email" value="<?php echo( $donnees['email']);?>" required maxlength=256/>
			<label> NumÈro de tÈlÈphone :</label><input type="tel" id="phone_number" name="phone_number" value="<?php echo( $donnees['phone_number']);?>" />
			<label> Est admin :</label><input type="checkbox" name="is_admin" value=' <?php if ($donnees['is_admin']==1){echo ("checked=checked");} ?>' />
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user2"  /></label>
			<label><input type='submit' name='submit_2' class='update' value='update'/></label>
	</form>
	<?php 
	}
	?>
	
<?php function userUpdated(){

    echo ('Les modifications ont ÈtÈ apportÈes ‡ l\'utilisateur');
    
    
}?>