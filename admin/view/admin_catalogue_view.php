<?php
/* Author : Teva Paquin
version : 1.0
date : 12/12
*/

function addForm(){?>
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
    <?php }?>
    
<?php function displayProductList($donnees){?>
    <div>
        <h1>Nos produits en vente</h1>
    <table>
    <th>
    <td><b>ID</b></td>
    <td><b>Nom du produit</b></td>
    <td><b>Prix</b></td>
    <td><b>Consommation</b></td>
    <td><b>Description</b></td>
    </th>
    <?php for ($i=0;$i<count($donnees['ID']);$i++)
    {?>    
        <tr>
        <td><?php echo($donnees['ID'][$i]);?></td>
        <td><?php echo($donnees['product_name'][$i]);?></td>
        <td><?php echo($donnees['price'][$i]);?></td>   
        <td><?php echo($donnees['conso'][$i]);?></td>
        <td><?php echo($donnees['description'][$i]);?></td>
        <td><form method="POST" action="">
        <label><input type="hidden" value="<?php echo($donnees['ID'][$i]);?>"  name="ID" id="text2" /></label>
        <input type="submit" value="Supprimer" name="submit"/>
        </form>
        </td>
        <td><form method="POST" action="">
        <label><input type="hidden" value="<?php echo($donnees['ID'][$i]);?>"  name="ID" id="text2" /></label>
        <input type="submit" value="Modifier" name="submit"/>
		</form>
		</td>
        </tr>
    <?php } ?>
    

</table>
</div>
<?php }?>
<?php function modifForm($data){?>
<h1>Modification de produit</h1>
    <div>
        <form method='POST' action=''>
            <label>Nom du produit : <input type='text' name='product_name'  value="<?php echo ($data['product_name']);?>"autofocus required maxlength=256/> </label><br>
            <label>Prix : <input type='tel' name='price' class='price' value="<?php echo ($data['price']);?>"required/></label><br>
            <label>Consommation : <input type='tel'name='conso'value="<?php echo ($data['conso']);?>"  required maxlength=256/></label><br>
            <label>Description : <input type='text' name='description' value="<?php echo ($data['description']);?>"required/></label><br>
            <label><input type="hidden" value="<?php echo ($data['ID']);?>"  name="id_user" id="text2" /></label>
            <label><input type='submit' name='submit' class='ajout' value='Continuer'/></label>
    
        </form>
    </div>
    
    <?php }?>