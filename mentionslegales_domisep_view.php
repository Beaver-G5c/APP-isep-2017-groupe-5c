

<html>

	<head>
		<title>Mentions légales</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style/mentionslegales_domisep.css">
		
	</head>
	<?php include 'header.html'?>
	<body>
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
    	


	</body>
	</html>
<?php include 'footer.php';?>