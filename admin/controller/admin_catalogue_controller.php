<?php
/* Author : Teva Paquin
version : 1.0
date : 13/12
*/
require ($localisation.'admin/model/admin_catalogue_model.php');
require($localisation.'admin/view/admin_catalogue_view.php');


    
if (isset($_POST['submit'])){

    if (($_POST['submit'])=='Supprimer')
    {   
        del_product((input_securisation($_POST['ID'])),$bdd);
        addForm();
        $productList=getProductList($bdd);
        displayProductList($productList);
    }
    
    if (($_POST['submit'])=='Modifier')
    {
        $productData=getProductData($bdd,$_POST["ID"]);
        modifForm($productData);
        
    }
    if (($_POST['submit'])=='Ajout')
    {
    
    add_product((input_securisation($_POST['product_name'])),(input_securisation($_POST['price'])),(input_securisation($_POST['conso'])),(input_securisation($_POST['description'])));
    addForm();
    $productList=getProductList($bdd);
    displayProductList($productList);
    }
    
    if (($_POST['submit'])=='Continuer')
    {
        modif_product((input_securisation($_POST['id_user'])),(input_securisation($_POST['product_name'])),(input_securisation($_POST['price'])),(input_securisation($_POST['conso'])),(input_securisation($_POST['description'])),$bdd);
        addForm();
        $productList=getProductList($bdd);
        displayProductList($productList);
        
        
        
       
    }
    
}
   
    
        

else
{
    $productList=getProductList($bdd);
    addForm();
    displayProductList($productList);
    
}
?>