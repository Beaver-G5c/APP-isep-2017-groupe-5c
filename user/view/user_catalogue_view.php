

<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/


?>

 
    <div id='show_product'>
        <h1 class='product_titre_user'>Nos produits en vente</h1>
    <table id='table_user'>
    <tr>
    <td><b>ID</b></td>
    <td><b>Nom du produit</b></td>
    <td><b>Prix</b></td>
    <td><b>Consommation</b></td>
    <td><b>Description</b></td>
    <td><b>Type</b></td>
    <?php show_product($bdd) ?>
    

</table>
</div>
