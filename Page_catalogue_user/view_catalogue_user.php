

<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/


require '../Fonctions/connect.php';
?>

   <!DOCTYPE html>

<html>
   
    <head>
        <meta charset='utf-8' />
        <link rel='stylesheet' href='../style/style_catalogue.css'/>
        <title>Catalogue</title>
    </head>
    <body>
    <div>
        <h1>Nos produits en vente</h1>
    <?php $reponse = $bdd->query('SELECT * FROM catalogue'); ?>
    <table>
    <tr>
    <td><b>ID</b></td>
    <td><b>Nom du produit</b></td>
    <td><b>Prix</b></td>
    <td><b>Consommation</b></td>
    <td><b>Description</b></td>
    <?php while ($donnees = $reponse->fetch()) 
    {?>    
        <tr>
        <td><?php echo($donnees['ID']);?></td>
        <td><?php echo($donnees['product_name']);?></td>
        <td><?php echo($donnees['price']);?></td>   
        <td><?php echo($donnees['conso']);?></td>
        <td><?php echo($donnees['description']);?></td>
        </tr>
    <?php } ?>
    

</table>
</div>
</body>