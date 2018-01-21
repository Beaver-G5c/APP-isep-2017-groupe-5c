<?php

  
 function add_product($product_name,$price,$conso,$description){
 
        require ("../connect.php");
        $req=$bdd->prepare(" INSERT INTO `catalogue` (`product_name`,`price`,`conso`,`description`) VALUES(:product_name,:price,:conso,:description)");
        $req-> execute(array(
        'product_name'=>$product_name,
        'price'=>$price,
        'conso'=>$conso,
        'description'=>$description
        
        ));
 }
function del_product($ID,$bdd)
{
    $delid = $_POST['ID'];
    $bdd->exec("DELETE FROM `catalogue` WHERE id = $delid");
}
function modif_product($idUser,$product_name,$price,$conso,$description,$bdd)
{
    
    
    $req = $bdd->prepare('UPDATE catalogue SET product_name = ?,price=? ,conso=?,description=? WHERE ID = ?');
    $req->execute(array($product_name, $price, $conso, $description, $idUser));
    
    
}

function getProductList($bdd){
    // la fonction prend tous les elements sur les produits et renvoie un tableau avec tous les elements

    $req=$bdd->query("SELECT * from catalogue");
    $dataArray=array("ID"=>array(),"product_name"=>array(),"price"=>array(),"conso"=>array(),"description"=>array());
    $i=0;
    while ($donnees = $req->fetch()){
        
        $dataArray['ID'][$i]=$donnees['ID'];
        $dataArray['product_name'][$i]=$donnees['product_name'];
        $dataArray['price'][$i]=$donnees['price'];
        $dataArray['conso'][$i]=$donnees['conso'];
        $dataArray['description'][$i]=$donnees['description'];
        $i++;
    }
    return ($dataArray);
}
        
function getProductData($bdd,$id){
    $req = $bdd->query('SELECT * FROM catalogue WHERE ID=" '.$id.'"');
    $donnees = $req->fetch();
    return $donnees;
}


    
?>