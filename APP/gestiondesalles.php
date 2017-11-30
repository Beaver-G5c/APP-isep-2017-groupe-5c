<?php
header('Content-type: text/html; charset=iso-8859-1');
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="gestiondesalles.css">
	<title>Gestion des salles</title>
		
	
<?php include 'header.html';?>
</head>


<body>
<form align="center"><h1>Gestion des salles </h1></form>

 
<form method="POST" action="">
   <p>
       <label for="salles">Que souhaitez vous faire?</label><br />
       <select name="salles" id="salles">
           <option value="Ajouter une salle">Ajouter une salle</option>
           <option value="Modifier une salle">Modifier une salle</option>
           <option value="Supprimer une salle">Supprimer une salle</option>
           
       </select>
    <input type="submit" name="valider">  
   </p>
</form>

<?php 


if (isset($_POST['salles'])) {
	   $choix=$_POST['salles']; 

		
}
else {
	$choix='';
}
if ($choix=='Ajouter une salle')

 {
 	?>
 	<form method="POST" action="">
 	<input type="texte" name="tete" placeholder="Nom de la salle">
 	<input type="texte" name="tete" placeholder="taille de la salle">
 	<input type="submit" name="valider">
 	<label for="capteur">Quel capteur est présent dans la salle?</label><br />
       <select name="capteur" id="capteur">
           <option value="Capteur de luminosité">Capteur de luminosité</option>
           <option value="Capteur de présence">Capteur de présence</option>
           <option value="Capteur multifonction">Capteur multifonction</option>
           </select>
    <input type="submit" name="Ajouter capteur">
    </form>       
	<?php

}
if ($choix=='Modifier une salle') {
	?>
	<form method="POST" action="">
	<label for="modifiersalle">Quelle salle souhaitez-vous modifier?</label><br />
       <select name="modifsalle" id="modifsalle">
           <option value="salle 1">salle 1</option>
           <option value="salle 2">salle 2</option>
           <option value="Salle 3">Salle 3</option>
           </select>
    <input type="submit" name="Ajouter capteur">
</form>
    <?php

}
 if ($choix=='Supprimer une salle') {
?>
	<form method="POST" action="">
 	<label for="suprsalle">Quelle salle souhaitez-vous supprimer?</label><br />
       <select name="suprsalle" id="suprsalle">
           <option value="salle 1">salle 1</option>
           <option value="salle 2">salle 2</option>
           <option value="Salle 3">Salle 3</option>
           </select>
    <input type="submit" name="Supprimer">
</form>
<?php
 }

//Valeur renvoyée par le formulaire pour choisir la salle à supprimmer
 if (isset($_POST['suprsalle'])) {
	   $choixsupr=$_POST['suprsalle']; 

		
}
else {
	$choixsupr='';

}
if($choixsupr=='salle1'){
	?>
	<input type="supprimmer" value="Effacer" id="salle1" name="salle1" >
	<?php


}
 















?>





























<?php include 'footerhtml-v1.0.html';
/* Footer du site */
?>
</form>
</body>
</html>