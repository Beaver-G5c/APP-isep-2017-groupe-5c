

	<div class="conteneur">	
	<h1>Modification des mentions légales</h1>
	
    	
    	
    	
    	<form method="POST" action="" align="center">
    		Titre des mentions légales: <br/>
    		<input type="text" name="titre_mentions_legales" value="<?php echo $donnees['title']; ?>"class="titre_formulaire"><br/><br/>
    		Mentions légales:<br/>
    		<textarea name="mentions_legales" class="textarea" ><?php echo $donnees['body']; ?></textarea><br/>
    		<input type="submit" name="valider">
    	</form>
    	</div>
    	


	</body>
	</html>
<?php// include 'footer.php';?>