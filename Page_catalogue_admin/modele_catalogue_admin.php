<?php
/* Author : Teva Paquin
version : 1.0
date : 04/12
*/
  
 function add_product($product_name,$price,$conso,$description){
 
        require ("../Fonctions/connect.php");
        $req=$bdd->prepare(" INSERT INTO `catalogue` (`product_name`,`price`,`conso`,`description`) VALUES(:product_name,:price,:conso,:description)");
        $req-> execute(array(
        'product_name'=>$product_name,
        'price'=>$price,
        'conso'=>$conso,
        'description'=>$description
        
        ));
 }



function del_product($ID)
{
    require ("../Fonctions/connect.php");
    $delid = $_POST['ID'];
    $bdd->exec("DELETE FROM `catalogue` WHERE id = $delid");
}

function modif_product($idUser,$product_name,$price,$conso,$description)
{
    require ('../Fonctions/connect.php');
    
    $req = $bdd->prepare('UPDATE catalogue SET product_name = ?,price=? ,conso=?,description=? WHERE ID = ?');
    $req->execute(array($product_name, $price, $conso, $description, $idUser));
    
}
?>