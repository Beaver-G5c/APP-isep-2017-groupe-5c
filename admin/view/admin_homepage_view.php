
<a href="index.php?page=admin_homepage_management"><input type="button" value="Gestion de la page d'accueil"></a>
<a href="index.php?page=admin_mentions_legales"><input type="button" value='Gestion des mentions légales'></a>
<a href="index.php?page=admin_catalogue"><input type="button" value ='Gestion du catalogue'></a>



<div class = zone>
        		<h3 class = homepage_h3>Modification du sloggan de la page d'accueil</h3>

	            <form method='POST' action='' class = form_homepage>
	            	<label>Titre : <br><input type='text' name='title' class='formulaire' value="<?php echo($data['homepage_title']);?>" /> </label><br>
	                <label for="text">Texte : <br></label><textarea name="text" class = 'formulaire'><?php echo($data['homepage_text']);?></textarea><br>
	                	                
	                <input type="submit" name="valider" value = "Envoyer">
	                <br><br>

	            </form>
            
            </div>

            <div class = homepage_visual>
            	Voici le slogan d'accueil actuel :
            	<h3><?php echo($data['homepage_title']);?></h3>
            	<?php echo($data['homepage_text']);?></div>