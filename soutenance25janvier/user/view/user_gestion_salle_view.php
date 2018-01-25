

<?php function displayCatalogue($data){
    for ($i=0;$i<count($data['ID']);$i++){ ?>
            
        <input type="checkbox" name="<?php echo('checkbox'.$data['ID'][$i]); ?>" /><label ><?php echo($data['product_name'][$i]); ?></label><br/><input type="text" name="<?php echo('cat'.$data['ID'][$i]);?>" placeholder="<?php echo('ID '.$data['product_name'][$i])?>" />
   		<input type='hidden' name='<?php echo('id_type'.$data['ID'][$i]);?> value='<?php echo($data['ID_type'][$i])?>'/><br/>
    <?php  }
    

}

?>
<?php function sensorList($data){?>
    <form method="POST" action="">
		<?php displayCatalogue($data);?>
		<input type='submit' name='valider_ajout' value='valider'/>
	</form>
	
<?php }?>

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
    
<fieldset>
<?php sensorList( $arrayData);?>
  
</fieldset>

</form>

<?php }

if ($choix=='Modifier une salle') {
    ?>
  
  <form method="POST" action="">
  <input type="submit" name="ajoutercapteur" value="ajouter un capteur" id="ajoutercapteur">
  <input type="submit" name="supprimercapteur" value="supprimer un capteur" id="supprimercapteur">
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
 if(isset($_POST['supprimercapteur'])){
   ?> <form method="POST" action="">
   
        <input type="text" name="id_suppresion_capteur" placeholder="ID du capteur à supprimer">
     <input type="submit" name="valider_suppresioncapt">  
 </form> <?php }
  
  
  if(isset($_POST['valider_suppresioncapt'])){
 echo"Le capteur a été supprimé" ;
}
if (isset($_POST["input_nomsalle"])  AND empty($_POST["nombre_actionneur"])) {
    echo"La pièce a bien été ajoutée";
}
if(isset($_POST['valider_actionneur'])){
    echo"la pièce a été ajoutée";
}
?>
 </div> 



 </html>