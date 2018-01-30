<?php
require ($localisation.'admin/model/admin_catalogue_model.php');
empty ($_POST['submit']);
if (isset($_POST['submit']))
    {   
    add_product($bdd,(input_securisation($_POST['product_name'])),(input_securisation($_POST['price'])),(input_securisation($_POST['conso'])),(input_securisation($_POST['description'])),(input_securisation($_POST['type_device'])));
    require ($localisation.'admin/view/admin_catalogue_view.php'); 
    }
else
{
    if (isset($_POST['supprimer']))
    {
    del_product($bdd,(input_securisation($_POST['ID'])));
    require ($localisation.'admin/view/admin_catalogue_view.php'); 
    }
    else
    {
        if(isset($_POST['modifier']))
        {
            require ($localisation.'admin/view/admin_catalogue_modif_view.php');
        }
        else
        {
            if (isset($_POST['modifier2']))
            {
                modif_product($bdd,(input_securisation($_POST['ID'])),(input_securisation($_POST['product_namemodif'])),(input_securisation($_POST['pricemodif'])),(input_securisation($_POST['consomodif'])),(input_securisation($_POST['descriptionmodif'])),(input_securisation($_POST['type_device_modif'])));
                require ($localisation.'admin/view/admin_catalogue_view.php'); 
            }
            else
            {
                require ($localisation.'admin/view/admin_catalogue_view.php');
            }
        }
    }
}
?>