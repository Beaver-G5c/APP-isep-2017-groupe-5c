<?php
/* Author : Teva Paquin
version : 1.0
date : 04/12
*/
  
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
    
function idtotype(bdd,$id){
    
    $reponse = $bdd->query("SELECT Nom FROM type_device WHERE ID_type = $id");
    while ($donnees = $reponse->fetch()) 
    {
    echo "<td>"; echo($donnees['Nom']); echo"</td>";
    }
}
    
}
?>