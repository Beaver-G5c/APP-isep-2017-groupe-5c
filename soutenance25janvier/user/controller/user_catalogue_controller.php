<?php
/* Author : Teva Paquin
version : 1.0
date : 13/12
*/
require ($localisation.'user/model/user_catalogue_model.php');
if (isset($_POST['submit']))
{
    require ($localisation.'user/view/user_catalogue_commentaire_view.php');
}
else
{
    if(isset($_POST['submit_commentaire']))
    {
        add_comment($bdd,$_POST['nom'],$_POST['commentaire'],$_POST['ID_catalogue']);
        require ($localisation.'user/view/user_catalogue_view.php');
    }    
    else
    {    
        require ($localisation.'user/view/user_catalogue_view.php');
    }        
}
?>