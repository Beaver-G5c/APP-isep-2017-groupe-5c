<?php
/* Author : Teva Paquin
version : 1.0
date : 13/12
*/

require ('modele_catalogue_admin.php');
empty ($_POST['submit']);

if (isset($_POST['submit']))
    {   
    add_product((input_securisation($_POST['product_name'])),(input_securisation($_POST['price'])),(input_securisation($_POST['conso'])),(input_securisation($_POST['description'])),(input_securisation($_POST['type_device'])));
    include('view_catalogue_admin.php'); 
    }
else
{
    if (isset($_POST['supprimer']))
    {
    del_product((input_securisation($_POST['ID'])));
    include('view_catalogue_admin.php'); 
    }
    else
    {
        if(isset($_POST['modifier']))
        {
            include('view_catalogue_admin_modif.php');
        }
        else
        {
            if (isset($_POST['modifier2']))
            {
                modif_product((input_securisation($_POST['ID'])),(input_securisation($_POST['product_namemodif'])),(input_securisation($_POST['pricemodif'])),(input_securisation($_POST['consomodif'])),(input_securisation($_POST['descriptionmodif'])),(input_securisation($_POST['type_device_modif'])));
                include('view_catalogue_admin.php'); 
            }
            else
            {
                include('view_catalogue_admin.php');
            }
        }
    }
}



?>