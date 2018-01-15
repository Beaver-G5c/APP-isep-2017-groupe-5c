

<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/

include '../header-v2.2.html';
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
    <h1>Ajout de produit</h1>
    <div>
        <form method='POST' action=''>
            <label>Nom du produit : <input type='text' name='product_name' class='product_name' placeholder='Ex:CC560'autofocus required maxlength=256/> </label><br>
            <label>Prix : <input type='tel' name='price' class='price' placeholder=' Ex:250'required/></label><br>
            <label>Consommation : <input type='tel'name='conso' class='conso' placeholder='404040404040' required maxlength=256/></label><br>
            <label>Description : <input type='text' name='description' class='description' placeholder='Ex:Un capteur de température'required/></label><br>
            <label><input type='submit' name='submit' class='ajout' value='Ajout'/></label>
    
        </form>
       
    </div>
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
        <td><form method="POST" action="">
        <label><input type="hidden" value="<?php echo($donnees['ID']);?>"  name="ID" id="text2" /></label>
        <input type="submit" value="Supprimer" name="supprimer"/>
        </form>
        </td>
        <td><form method="POST" action="view_catalogue_admin_modif.php">
        <label><input type="hidden" value="<?php echo($donnees['ID']);?>"  name="ID" id="text2" /></label>
        <input type="submit" value="Modifier" name="modifier"/>
		</form>
		</td>
        </tr>
    <?php } ?>
    

</table>
</div>
</body>