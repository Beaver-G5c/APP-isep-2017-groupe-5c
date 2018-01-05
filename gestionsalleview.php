<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../style/gestiondesalles.css">
<title>Gestion des pièces</title>
</head>

<?php include 'header.html';?>
<body>

  <div class='conteneur'>
 <form align="center"><h1>Gestion des pièces </h1></form>
 
  
 <form method="POST" action="">
    <p>
        <label for="salles">Que souhaitez vous faire?</label><br />
        <select name="salles" id="salles">
            <option value="Ajouter une salle">Ajouter une pièce</option>
           <option value="Modifier une salle">Modifier une pièce</option>
            <option value="Supprimer une salle">Supprimer une pièce</option>
            
        </select>
     <input type="submit" name="valider">  
    </p>
 </form>

 
 <!--formulaire principale -->
 <?php 
 if ($choix=='Ajouter une salle')
 
  {
    ?>
    <form method="POST" action="">
    <label for="ajoutsallesalle">Ajout d'une nouvelle pièce</label><br />
    <input type="text" name="input_nomsalle" placeholder="nom de la pièce" class="input_nomsalle">
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
Nombre d'actionneurs présent dans la pièce:
<input type="text" name="nombre_actionneur"> <br/>
<input type="submit" name="valider"></form> 

<?php }
if(isset($_POST['valider']) AND !empty($_POST['nombre_actionneur'])){
    $i = $_POST['nombre_actionneur'];
    $j=1;
    while ($j<=$i){
        
        ?> <form method="POST" action="">
        	<input type="text" name="actionneur <?php echo $j ?>" placeholder="ID de l'actionneur <?php echo $j ?>"><br/>
        	<label for="type_actionneur">Quel est le type de l'actionneur <?php echo $j ?></label>
        <select name="type_actionneur<?php echo $j?>" id="type_actionneur<?php echo $j?>">
            <option value="clim">Climatisation réversible</option>
           <option value="alarme">Alarme</option>
            <option value="camera">Vidéo surveillance</option>
            
        </select>
        	</form>
        	<?php 
        	$j++;    
    }
    ?> <form method="POST" action=""><input type="submit" name="valider_actionneur"></form>
    <?php 
}
if ($choix=='Modifier une salle') {
    ?>
  <form method="POST" action="">
 Quelle pièce souhaitez-vous modifier?<br />
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
    <label for="suprsalle">Quelle pièce souhaitez-vous supprimer?</label><br />

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
    echo"La pièce a bien été supprimée";
}


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
   <label for="ajouteruncapteur">Quel type de capteur souhaitez vous ajouter?</label><br />
        <select name="ajouteruncapteur" id="ajouteruncapteur">
            <option value="cc2650">CC2650</option>
           <option value="capteur_luminosite">Capteur de luminosité</option>
            <option value="positionangulaire">Capteur de position angulaire</option>
            <option value="detecteur_de_fumee">Detecteur de fumée</option>
           <option value="capteur_presence">Capteur de présence</option>
            <option value="capteur_contact">Capteur de contact</option>
            
        </select>
        <input type="text" name="id_ajout_capteur" placeholder="ID du capteur à ajouter">
     <input type="submit" name="valider_ajoutcapt">  
 </form> <?php }

 if(isset($_POST['valider_ajoutcapt'])){
 echo"Le capteur a été ajouté" ;
}


 if(isset($_POST['supprimercapteur'])){
   ?> <form method="POST" action="">
   <label for="ajouteruncapteur">Quel type de capteur souhaitez vous supprimer?</label><br />
        <select name="ajouteruncapteur" id="ajouteruncapteur">
            <option value="cc2650">CC2650</option>
           <option value="capteur_luminosite">Capteur de luminosité</option>
            <option value="positionangulaire">Capteur de position angulaire</option>
            <option value="detecteur_de_fumee">Detecteur de fumée</option>
           <option value="capteur_presence">Capteur de présence</option>
            <option value="capteur_contact">Capteur de contact</option>
            
        </select>
        <input type="text" name="id_suppresion_capteur" placeholder="ID du capteur à supprimer">
     <input type="submit" name="valider_suppresioncapt">  
 </form> <?php }
  if(isset($_POST['valider_suppresioncapt'])){
 echo"Le capteur a été supprimé" ;
}
if (isset($_POST["input_nomsalle"]) AND isset($_POST["input_id_installation"]) AND empty($_POST["nombre_actionneur"])) {
    echo"La pièce a bien été ajoutée";
}
if(isset($_POST['valider_actionneur'])){
    echo"la pièce a été ajoutée";
}
?>
 </div> 

 <?php include 'footer.php';?>
 </body>
 </html>