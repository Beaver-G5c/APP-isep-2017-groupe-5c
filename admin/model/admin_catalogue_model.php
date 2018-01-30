 <?php 
function add_product($bdd,$product_name,$price,$conso,$description,$ID_type){
 
        $req=$bdd->prepare(" INSERT INTO `catalogue` (`product_name`,`price`,`conso`,`description`,`ID_type`) VALUES(:product_name,:price,:conso,:description,:ID_type)");
        $req-> execute(array(
        'product_name'=>$product_name,
        'price'=>$price,
        'conso'=>$conso,
        'description'=>$description,
        'ID_type'=>$ID_type
        
        ));
 }
function del_product($bdd,$ID)
{
    
    $delid = $_POST['ID'];
    $bdd->exec("DELETE FROM `catalogue` WHERE id = $delid");
}
function modif_product($bdd,$idUser,$product_name,$price,$conso,$description,$ID_type)
{
    
    
    $req = $bdd->prepare('UPDATE catalogue SET product_name = ?,price=? ,conso=?,description=?,ID_type=? WHERE ID = ?');
    $req->execute(array($product_name, $price, $conso, $description,$ID_type, $idUser));
    
}
function get_device_category($bdd){
    
    $reponse = $bdd->query('SELECT * FROM type_device');
    while ($donnees=$reponse->fetch())
    {
        echo '<option value="'; echo $donnees['ID_type']; echo '">'; echo $donnees['Nom']; echo '</option>'; /* on renvoie du html afin que le view puisse ensuite l'afficher */
    }
    
function idtotype($bdd,$id){
    
    $reponse = $bdd->query("SELECT Nom FROM type_device WHERE ID_type = $id");
    while ($donnees = $reponse->fetch()) 
    {
    echo "<td>"; echo($donnees['Nom']); echo"</td>";
    }
}

function idtotype2($bdd,$id)
{
    $reponse = $bdd->query("SELECT Nom FROM type_device WHERE ID_type = $id");
    while ($donnees = $reponse->fetch()) 
    {
     echo($donnees['Nom']);
    }
}
    
function show_product($bdd){
    $reponse = $bdd->query('SELECT * FROM catalogue'); 
    while ($donnees = $reponse->fetch())
    {
        echo '<tr>
        <td>'; echo($donnees['ID']); echo'</td>
        <td>'; echo($donnees['product_name']); echo'</td>
        <td>'; echo($donnees['price']); echo '</td>   
        <td>'; echo($donnees['conso']); echo '</td>
        <td>'; echo($donnees['description']); echo '</td>';
        idtotype($bdd,$donnees['ID_type']);
        echo '<td><form method="POST" action="">
        <label><input type="hidden" value="'; echo($donnees['ID']);echo'"  name="ID" id="text2" /></label>
        <input type="submit" value="Supprimer" name="supprimer"/>
        </form>
        </td>
        <td><form method="POST" action="">
        <label><input type="hidden" value="'; echo($donnees['product_name']);echo'"  name="product_name_modif" id="text2" /></label>
        <label><input type="hidden" value="'; echo($donnees['price']);echo'"  name="pricemodif" id="text2" /></label>
        <label><input type="hidden" value="'; echo($donnees['conso']);echo'"  name="consomodif" id="text2" /></label>
        <label><input type="hidden" value="'; echo($donnees['description']);echo'"  name="descriptionmodif" id="text2" /></label>
        <label><input type="hidden" value="'; idtotype2($bdd,$donnees['ID_type']);echo'"  name="ID_typemodif" id="text2" /></label>
        <label><input type="hidden" value="'; echo($donnees['ID']);echo'"  name="ID" id="text2" /></label>
        <input type="submit" value="Modifier" name="modifier"/>
		</form>
		</td>
       
        </tr>';
    }
}
    
}
?>