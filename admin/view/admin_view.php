<!DOCTYPE html>

<html>



    <head>
	
	

        <meta charset="utf-8" />

		
        <link rel="stylesheet" href="view/style-arrays.css"  >

		
        <title>Admin</title>

		
    </head>


    <body>
	
	<?php require ("header.php"); ?>

	
	
	
	
	
	
	
	
	
	


<a href= "controller/add_user_controller.php">Ajouter un utilisateur </a>
<?php
require ("../connect.php");


//$req = $bdd->query('SELECT ID_user,name,email,phone_number,account_creation_date,last_connection_date,is_connected,is_admin,admin_authorization,last_cgu_acceptance FROM users ORDER BY account_creation_date DESC LIMIT 0, 50');


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
	   require($nomDossier."model/admin_model.php");
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
		<td><form method="POST" action="controller/action_controller.php" >
			<label><input type="hidden" value="<?php echo($donnees['ID_user']); ?>"  name="id_user"  /></label>
			<input type="submit" value="Supprimer" name="submit"/>
			<input type="submit" value="Modifier" name="submit"/>
		</form>
		</td>
		
	</tr>
	   
	   
	   
   
   

<?php }
?>


	
	



</table>
</body>
</html>
