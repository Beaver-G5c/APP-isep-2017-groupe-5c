<?php



function catalogue(){
    //Permet d'afficher les capteurs et actionneurs présents dans le catalogue Domisep
  require 'getinfomodel.php';
    $i=0;
    foreach ($req as $value){
        

    ?>
	<form method="post">
  <div>
    <input type="checkbox" >
    <label for="multifonction"><?php echo($value['product_name']); ?></label>
    <input type="text" name="name_id" placeholder="id <?php echo($value['product_name']); ?>">
     
  </div></form>
  <?php
  $i++;
    }}

echo catalogue();
?><form method="POST" action="">

<input type="submit" name="valider_ajout_salle">

</form>
<?php 






?>












