<a href="index.php?page=admin_homepage_management"><input type="button" value="Gestion de la page d'accueil"></a>
<a href="index.php?page=admin_mentions_legales"><input type="button" value='Gestion des mentions légales'></a>
<a href="index.php?page=admin_catalogue"><input type="button" value ='Gestion du catalogue'></a>


<div class="conteneur">	
	<h1>Modification des mentions légales</h1>
	

    	
    	
    	
    	<form method="POST" action="" align="center">
    		Titre des mentions légales: <br/>
    		<input type="text" name="titre_mentions_legales" value="<?php echo $donnees['title']; ?>"class="titre_formulaire"><br/><br/>
    		Mentions légales:<br/>
    		<textarea name="mentions_legales" class="textarea" ><?php echo $donnees['body']; ?></textarea><br/>
    		<input type="submit" name="valider_mentions">
    	</form>
    	</div>
