<?php
/* Author : Teva Paquin
version : 1.0
date : 13/12
*/
require ($localisation.'promo_website/website_catalogue_model.php');
if (isset($_POST['submit']))
{
    require ($localisation.'promo_website/website_catalogue_comment_view.php');
}
else
{
    if(isset($_POST['submit_commentaire']))
    {
        add_comment($bdd,$_POST['nom'],$_POST['commentaire'],$_POST['ID_catalogue']);
        require ($localisation.'promo_website/website_catalogue_view.php');
    }    
    else
    {    
        require ($localisation.'promo_website/website_catalogue_view.php');
    }        
}
?>