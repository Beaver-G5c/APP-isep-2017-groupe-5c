    <?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/


?>

   <!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link rel='stylesheet' href='../style/style_catalogue.css'/>
        <title>Catalogue</title>
    </head>
    <body>
    <h1>Modification de produit</h1>
    <div>
        <form method='POST' action=''>
            <label>Nom du produit : <input type='text' name='product_namemodif' class='product_name' placeholder='Ex:CC560'autofocus required maxlength=256/> </label><br>
            <label>Prix : <input type='tel' name='pricemodif' class='price' placeholder=' Ex:250'required/></label><br>
            <label>Consommation : <input type='tel'name='consomodif' class='conso' placeholder='404040404040' required maxlength=256/></label><br>
            <label>Description : <input type='text' name='descriptionmodif' class='description' placeholder='Ex:Un capteur de température'required/></label><br>
            <label><select id='type_device_modif' name='type_device_modif'>
            <?php get_device_category(); ?>
            </select></label><br>
            <label><input type="hidden" value="<?php echo($_POST['ID']);?>"  name="ID" id="text2" /></label>
            <label><input type='submit' name='modifier2' class='ajout' value='Modifier'/></label>
    
        </form>
    </div>
</body>