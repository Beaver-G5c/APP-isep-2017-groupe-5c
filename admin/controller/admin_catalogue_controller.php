<?php
/* Author : Teva Paquin
version : 1.0
date : 13/12
*/

empty ($_POST['submit']);
if (isset($_POST['supprimer']))
    {
    del_product((input_securisation($_POST['ID'])));
    }
if (isset($_POST['submit']))
    {   
    add_product((input_securisation($_POST['product_name'])),(input_securisation($_POST['price'])),(input_securisation($_POST['conso'])),(input_securisation($_POST['description'])));
    }
   
if (isset($_POST['modifier2']))
        {
                modif_product((input_securisation($_POST['ID'])),(input_securisation($_POST['product_namemodif'])),(input_securisation($_POST['pricemodif'])),(input_securisation($_POST['consomodif'])),(input_securisation($_POST['descriptionmodif'])));
                require($localisation.'admin/view/admin_catalogue_view.php');
} 
        
else
{
    require($localisation.'admin/view/admin_catalogue_view.php');
}
?>