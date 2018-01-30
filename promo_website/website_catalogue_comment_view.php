<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/
?>

    <div id ='product_show'>
        <h3>Nom de produit</h3>
        <p><?php echo $_POST['product_name']; ?></p>
        <h3>Prix</h3>
        <p><?php echo $_POST['price']; ?></p>
        <h3>Consommation</h3>
        <p><?php echo $_POST['conso']; ?></p>
        <h3>Description</h3>
        <p><?php echo $_POST['description']; ?></p>
        <h3>Type de produit</h3>
        <p><?php echo $_POST['ID_type']; ?></p>
    </div>
    <div id='product_show_comment'>
        <h2>Avis :</h2>
    <?php show_comment($bdd,$_POST['ID']); ?>
    </div>
