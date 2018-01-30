

 

<?php function displayCatalogue($data){
	//Fonction qui parcourt tout le catalogue Domisep et propose d'ajouter chaque appareil �  l'aide d'un formulaire
    for ($i=0;$i<count($data['ID']);$i++){ ?>
            
        <input type="checkbox" name="<?php echo('checkbox'.$data['ID'][$i]); ?>" /><label ><?php echo($data['product_name'][$i]); ?></label><br/><input type="text" name="<?php echo('cat'.$data['ID'][$i]);?>" placeholder="<?php echo('ID '.$data['product_name'][$i])?>" />
   	<input type="text" name="<?php echo('sensor_name'.$data['ID'][$i]);?>" placeholder="<?php echo('Donnez un nom pour '.$data['product_name'][$i])?>" />	
	<input type='hidden' name='<?php echo('id_type'.$data['ID'][$i]);?>' value='<?php echo($data['ID_type'][$i])?>'/><br/>
    <?php  }    
    
}
?>
<?php function sensorList($data){?>
    <form method="POST" action="">
		<?php displayCatalogue($data);?>
		<input type='submit' name='valider_ajout' value='valider'/>
	</form>
	
<?php }?>
  <div class='conteneur_gestion_pieces'><a href='index.php?page=user_catalogue'>Consulter le Catalogue</a>
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
    
<fieldset>
<?php sensorList( $arrayData);?>
  
</fieldset>

</form>

<?php }
if ($choix=='Modifier une salle') {
    ?>
  
  <form method="POST" action="">
  <input type="submit" name="ajoutercapteur" value="ajouter un appareil" id="ajoutercapteur">
  <input type="submit" name="consulter" value="consulter les appareils" id="supprimercapteur">
  <input type="submit" name="supprimer_appareil" value=" Supprimer un appareil">
  </form><?php
 //formulaire modifier une salle
}
  if ($choix=='Supprimer une salle') {
 ?>



  
          <form method="POST" action="">
    <label for="suprsalle">Quelle pièce souhaitez-vous supprimer?</label><br />

    <select name="suprsalle" id="suprsalle" >
          <?php 
          
          
          while($resultatsupr = $requete2 -> fetch() ){
          
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
if(isset($_POST['ajoutercapteur'])){ ;
   ?> 
   <form method="POST" action="">
   <label for="ajout nouveaux capteurs">Dans quelle salle souhaitez-vous ajouter des capteurs ou des actionneurs?</label>
   <select name="input_nomsalle" id="modifsalle" >
          <?php
          while($resultatmodif = $requete2 -> fetch() ){
          
            # code...
          ?>
            <option value="<?php echo($resultatmodif['nomdelasalle'])  ?>"> <?php echo $resultatmodif['nomdelasalle'] ; ?> </option>
            <?php
      } ?> </select>
     

    
    <fieldset>
  <?php sensorList( $arrayData);?>
</fieldset>


 </form> <?php }
 if(isset($_POST['valider_ajoutcapt'])){
 echo"Le capteur a été ajouté" ;
}
 if(isset($_POST['consulter'])){
     ?><form method='POST' action=''><table><tr>
     <tr><td>Nom de la pièce</td><td>Appareil</td></tr>
     <?php 
     while($afficherapp = $requete4 -> fetch() ){
         
         # code...
         ?>
           <tr><td> <?php echo($afficherapp['nomdelasalle'])  ?></td> <td> <?php echo($afficherapp['nom_du_capteur'])  ?></td></tr>
            <?php
      } ?></tr></table></form>
      <?php 
 }
  
  if(isset($_POST['valider_suppresioncapt'])){
 echo"Le capteur a été supprimé" ;
}
if (isset($_POST["input_nomsalle"])  AND empty($_POST["nombre_actionneur"])) {
    echo"La pièce a bien été ajoutée";
}
if(isset($_POST['valider_actionneur'])){
    echo"la pièce a été ajoutée";
}

if(isset($_POST['valider_ajoutcapt'])){
 echo"Le capteur a été ajouté" ;
}
 if(isset($_POST['supprimer_appareil'])){
     ?>



  
          <form method="POST" action="">
    <label for="suprsalle">Quelle appareil souhaitez-vous supprimer?</label><br />

    <select name="suprapp" >
          <?php 
          
          
          while($resultatsupr = $requete4 -> fetch() ){
          
            # code...
          ?>
            <option value="<?php echo($resultatsupr['nom_du_capteur'])  ?>"> <?php echo $resultatsupr['nom_du_capteur'] ; ?> </option>
            <?php
      } ?> </select>
     <input type="submit" name="input_supprimer_appareil" value="supprimer">
 </form> <?php 
 }
 

 
?></div>