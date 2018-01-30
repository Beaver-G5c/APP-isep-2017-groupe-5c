 <h1 id='jeanne_titre'>Modification de produit</h1>
    <div id=modif_produit>
        <form method='POST' action=''>
            <label>Nom du produit : <br><input type='text' name='product_namemodif' class='product_name_modif2' placeholder='Ex:CC560'autofocus required maxlength=256 value='<?php echo $_POST['product_name_modif']; ?>'/> </label><br>
            <label>Prix : <br><input type='tel' name='pricemodif' class='pricemodif2' placeholder=' Ex:250'required value='<?php echo $_POST['pricemodif']; ?>'/></label><br>
            <label>Consommation : <br><input type='tel'name='consomodif' class='consomodif2' placeholder='404040404040' required maxlength=256 value='<?php echo $_POST['consomodif']; ?>'/></label><br>
            <label>Description : <br><textarea rows='5' cols='70' name='descriptionmodif' class='descriptionmodif2' placeholder='Ex:un tres bon capteur' required><?php echo $_POST['descriptionmodif'];?></textarea></label><br>
            <label>Type : <br><select id='type_device_modif2' name='type_device_modif'>
            <?php get_device_category($bdd); ?>
            </select></label><br>
            <label><input type="hidden" value="<?php echo($_POST['ID']);?>"  name="ID" id="text2" /></label>
            <label><input type='submit' name='modifier2' class='ajout' value='Modifier'/></label>
    
        </form>
</div>