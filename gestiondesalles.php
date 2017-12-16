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

  $id_salle= rand();
  


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
  	<input type="text" name="input_id_installation" placeholder="id de l'installation" class="input_id_installation">

  	
  	
 	
     
     <fieldset>
  <legend>Veuillez sélectionner les capteurs présents dans la pièce :</legend>
  <div>
    <input type="checkbox" class="cc2650" name="cc2650" value="cc2650">
    <label for="multifonction">CC2650</label>
    <input type="text" class="id_cc2650" name="id_cc2650" placeholder="id du capteur">
     
  </div>
  <div>
    <input type="checkbox" class="capteur_luminosité" name="capteur_luminosite" value="luminosité">
    <label for="luminosité">Capteur de luminosité</label>
    <input type="text" class="id_luminosite" name="id_luminosite" placeholder="id du capteur">
    
  </div>   
<div>
    <input type="checkbox" class="dectecteur_de_fumee" name="detecteur_de_fumee" value="detecteurfumee">
    <label for="detecteurfumee">Détecteur de fumée</label>
    <input type="text" class="id_fumee" name="id_fumee" placeholder="id du capteur">
    
  </div>
 
<div>
    <input type="checkbox" class="présence" name="capteur_presence" value="presence">
    <label for="position">Capteur de présence</label>
    <input type="text" class="id_presence" name="id_presence" placeholder="id du capteur">
    
  </div>
<div>
    <input type="checkbox" class="position_angulaire" name="position_angulaire" value="position_angulaire">
    <label for="position">Capteur de position angulaire</label>
    <input type="text" class="id_position" name="id_position" placeholder="id du capteur">
    
</div>
<div>
    <input type="checkbox" class="contact" name="capteur_contact" value="contact">
    <label for="position">Capteur de contact</label>
    <input type="text" class="id_contact" name="id_contact" placeholder="id du capteur">
    
 </div>
  
  
</fieldset>

<input type="submit" name="valider"></form> 
<?php }

if(isset($_POST['position_angulaire']) AND $_POST['id_position']){
    $captangle= $_POST['id_position'];
}
elseif (!isset($_POST['position_angulaire'])){
    $captangle=0;
}
if(isset($_POST['cc2650']) AND $_POST['id_cc2650']){
    $capt2650= $_POST['id_cc2650'];
}
elseif (!isset($_POST['cc2650'])){
    $capt2650=0;
}
if(isset($_POST['capteur_luminosite']) AND $_POST['id_luminosite']){
    $captluminosite= $_POST['id_luminosite'];
}
elseif (!isset($_POST['capteur_luminosite'])){
    $captluminosite=0;
}
if(isset($_POST['detecteur_de_fumee']) AND $_POST['id_fumee']){
    $captfumee= $_POST['id_fumee'];
}
elseif (!isset($_POST['detecteur_de_fumee'])){
    $captfumee=0;
}
if(isset($_POST['capteur_presence']) AND $_POST['id_presence']){
    $captpresence= $_POST['id_presence'];
}
elseif (!isset($_POST['capteur_presence'])){
    $captpresence=0;
}
if(isset($_POST['capteur_contact']) AND $_POST['id_contact']){
    $captcontact= $_POST['id_contact'];
}
elseif (!isset($_POST['capteur_contact'])){
    $captcontact=0;
}
if (isset($_POST["input_nomsalle"]) AND isset($_POST["input_id_installation"])) {
  
  $requeteajouter = $bdd->prepare("INSERT INTO salle(nomdelasalle,id_installation,id_salle) VALUES(? , ?, ".$id_salle." ) ");
  $requeteajouter->execute(array($_POST['input_nomsalle'], $_POST['input_id_installation']));
  $requeteajoutercapteurs = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,cc2650,positionangulaire, capteur_luminosite, detecteur_de_fumee, capteur_presence, capteur_contact ) VALUES(?,".$capt2650.",".$captangle.",".$captluminosite.",".$captfumee.",".$captpresence.",".$captcontact.") ");
  $requeteajoutercapteurs->execute(array($_POST['input_nomsalle'])) ;
  echo"La salle a bien été ajoutée";
}

 //ajout de salle et capteur dans la BDD
 


 
 
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
  $suprsalle = $bdd->query('DELETE FROM capteurs WHERE nomdelasalle = \'' . $_POST['suprsalle'] . '\';');
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
  <input type="submit" name="ajoutercapteur" value="ajouter un capteur" id="ajoutercapteur">
  <input type="submit" name="supprimercapteur" value="supprimer un capteur" id="supprimercapteur">
  </form>
  
 <?php 
 
}

if(isset($_POST['ajoutercapteur'])){
   ?> <form method="POST" action="">
   <label for="ajouteruncapteur">Quel capteur voulez vous ajouter?</label><br />
        <select name="ajouteruncapteur" id="ajouteruncapteur">
            <option value="cc2650">CC2650</option>
           <option value="capteur_luminosite">Capteur de luminosité</option>
            <option value="positionangulaire">Capteur de position angulaire</option>
            <option value="detecteur_de_fumee">Detecteur de fumée</option>
           <option value="capteur_presence">Capteur de présence</option>
            <option value="capteur_contact">Capteur de contact</option>
            
        </select>
     <input type="submit" name="valider">  
 </form> <?php }
 




 
 
 
 
 
 
 



  
  
  
  
?>
</body>

<div class="footer">
<?php
 include 'footer_v2.1.html' ;
 
 ?></div>
 
  


