
<a href='index.php?page=admin_install_number_list'><input type="button" value="Liste des numéros d'installation"></a>
	

	
	
	<h1 class='titre_admin_user_list'>LISTE DES UTILISATEURS</h1>
<form method="POST" action="">
<input type='submit'  class='bouton_admin_user_list' value='Ajouter un admin' name='submit'/>
	
	</form>

<?php





function display_list($donnees){
    
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
	<div class='cadre_admin_add_user'>
	<h1 class='titre_admin_add_user'>Modification</h1>
	<form method="POST" action="">
			
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user"  /></label>
			<label> Nom : </label><input type="text" id="name" name="name" value="<?php echo( $donnees['name']);?>" autofocus required maxlength=256 /><br><br>
			<label> Email : </label><input type="email" id="email" name="email" value="<?php echo( $donnees['email']);?>" required maxlength=256/><br><br>
			<label> Numero de telephone : </label><input type="tel" id="phone_number" name="phone_number" value="<?php echo( $donnees['phone_number']);?>" /><br><br>
			<label> Est admin : </label><input type="checkbox" name="is_admin" value=' <?php if ($donnees['is_admin']==1){echo ("checked=checked");} ?>' /><br><br>
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user2"  /></label><br><br>
			<label><input type='submit' name='submit_2' class='update_admin_add_user' value='Actualiser'/></label>
	</form>
	</div>
	<?php 
	}
	?>

	
<?php function userUpdated(){

    echo ('Les modifications ont été apportées a l\'utilisateur');
    
    
}?>