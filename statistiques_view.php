<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../style/statistiques.css">
<title>Statistiques</title>
</head>
<?php include 'header.html';?>
<body>
	<div class="conteneur">
	<h1>Statistiques</h1>
	
	<form method="post" action="">
	
	<label>Pour quelle période souhaitez vous étudier?</label>
	<select name="tri">
	<option value="derniereheure" >dernière heure écoulée</option>
	<option value="dernierejournee">Dernières 24 heures</option>
	<option value="semainecomplete">sept derniers jours</option>
	<option value="moiscomplet">trente derniers jours</option>
	</select>
	<input type="submit"  name="valider_horaire">
	</form>





















</div>
</body>
</html>
 <?php include 'footer.php';?>

