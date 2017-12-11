
 <?php
 header('Content-type: text/html; charset=iso-8859-1');
 ?>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="gestiondesalles.css">
 	<title>Gestion des salles</title>
 		
 	
 <?php include 'header-v2.2.html';?>
 </head>
 
 
 <body background='wallpaper.png'>
 
<?php
  $bdd = new PDO('mysql:host=localhost;dbname=app', 'root', 'root');

  $requete = $bdd->query("SELECT * FROM salle"); 
  


?>
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

 <? 
 //formulaire principalephp 
 
 
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
    <label for="ajoutsallesalle">Ajout d'une nouvelle salle</label><br />
  	<input type="text" name="input_nomsalle" placeholder="nom de la salle" class="input_nomsalle">
  	<input type="text" name="input_id" placeholder="ID de l'installation" class="input_id">
  	<input type="text" name="input_taillesalle" placeholder="Taille de la salle (m²)" class="input_taillesalle">
  	
 	
     
     <fieldset>
  <legend>Veuillez sélectionner les capteurs présents dans la pièce :</legend>
  <div>
    <input type="checkbox" id="cc2650" name="capteurs" value="cc2650">
    <label for="multifonction">CC2650</label>
    
  </div>
  <div>
    <input type="checkbox" id="luminosité" name="capteurs" value="luminosité">
    <label for="luminosité">Capteur de luminosité</label>
    
  </div>   
<div>
    <input type="checkbox" id="dectecteurfumée" name="capteurs" value="detecteurfumée">
    <label for="detecteurfumée">Détecteur de fumée</label>
    
  </div>
 
<div>
    <input type="checkbox" id="présence" name="capteurs" value="presence">
    <label for="position">Capteur de présence</label>
    
  </div>
<div>
    <input type="checkbox" id="position_angulaire" name="capteurs" value="position_angulaire">
    <label for="position">Capteur de position angulaire</label>
    
</div>
<div>
    <input type="checkbox" id="contact" name="capteurs" value="contact">
    <label for="position">Capteur de contact</label>
    
 </div>
  <br/><input type="submit" name="valider">
</fieldset>   </form> 
 	<?php
 
  }
  


if (isset($_POST['input_nomsalle']) AND isset($_POST['input_id'])  AND isset($_POST['input_taillesalle'])) {
  
  $requeteajouter = $bdd->prepare("INSERT INTO salle(nomdelasalle, ID , taillesalle) VALUES(? ,? , ?) ");
  $requeteajouter->execute(array($_POST['input_nomsalle'],$_POST['input_id'],$_POST['input_taillesalle']));
  
}
  //formulaire ajouter une salle
 
 
 if ($choix=='Modifier une salle') {
	?>
	<form method="POST" action="">
 Quelle salle souhaitez-vous modifier?<br />
        <select name="modifsalle" id="modifsalle">
          <?php while($resultatmodif = $requete -> fetch() ){
          
            # code...
          ?>
            <option  value="<?php echo($resultatmodif['nomdelasalle'])  ?>"><?php echo$resultatmodif['nomdelasalle'] ;  ?> </option>
            <?php

      }
            ?>
            </select>
     <input type="submit" >
 </form>



     <?php
 //formulaire modifier une salle
}
  if ($choix=='Supprimer une salle') {
 ?>



 	
          <form method="POST" action="">
    <label for="suprsalle">Quelle salle souhaitez-vous supprimer?</label><br />

    <select name="suprsalle" id="suprsalle" >
          <?php while($resultatsupr = $requete -> fetch() ){
          
            # code...
          ?>
            <option value="<?php echo($resultatsupr['nomdelasalle'])  ?>"> <?php echo $resultatsupr['nomdelasalle'] ; ?> </option>
            <?php

      } ?> </select>
     <input type="submit" name="Supprimer">
 </form>

<?php }
//formulaire supprimer une salle

if(isset($_POST['suprsalle'])){



  $suprsalle = $bdd->query('DELETE FROM salle WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
  $suprsalle->execute();
  echo"La salle a bien été supprimée";
}
//Supprimer de la BDD


if (isset($_POST['modifsalle'])) {
     $choix_modifsalle=$_POST['modifsalle'];  }
 else {
  $choix_modifsalle=''; } 

if (isset($_POST['modifsalle']))
{
  ?>
  
   <h1>Modification <?php echo $choix_modifsalle . " :" ; ?> </h1>
    <form method="POST" action="">
    
    <input type="text" name="modifnomsalle" placeholder="Nom de la salle" id="modifnomsalle">
    <input type="text" name="modifid" placeholder="taille de la salle (m²)" id="modifitaille">
    <input type="submit" name="validermodif" id="validermodif">

     </form> 
     
     

  <?php }
  
  if (isset($_POST['modifnomsalle']) ){
      var_dump($_POST['modifsalle']);
      
      
      $suprsalle = $bdd->query('DELETE FROM salle WHERE nomdelasalle = \'' . $_POST['modifsalle'] . '\';');
      $suprsalle->execute();
      
      
  }
  
 //modificaion dans la BDD
  
  
  
  
?>
</body>

<div class="footer">
<?php
 include 'footer_v2.1.html' ;

 ?></div>
 
  


 
 
 

 
