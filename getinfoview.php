<?php



function displayCatalogue($data){
    for ($i=0;$i<count($data['ID']);$i++){ ?>
            
        <input type="checkbox" name="<?php echo('checkbox'.$data['ID'][$i]); ?>" /><label ><?php echo($data['product_name'][$i]); ?></label><input type="text" name="<?php echo('cat'.$data['ID'][$i]);?>"  />
   		<input type='hidden' name='<?php echo('id_type'.$data['ID'][$i]);?> value='<?php echo($data['ID_type'][$i])?>'/>
    <?php  }
    

}

?>
<?php function sensorList($data){?>
    <form method="POST" action="">
		<?php displayCatalogue($data);?>
		<input type='submit' name='ajout_capteur' value='ajouter'/>
	</form>
	
<?php }?>














