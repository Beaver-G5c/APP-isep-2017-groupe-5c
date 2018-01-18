<?php 


include ('connect.php');
$localisation="C:/wamp64/www/testthiboo/APP/version_soutenance/";




//-------------------- creation de la session ------------------------

require ($localisation.'user/model/session_declaration.php');




// -------------------require des fonctions----------------------------
require($localisation.'functions/functions_security.php');
require($localisation.'functions/functions_user.php');
require ($localisation.'functions/functions_admin.php');
require ($localisation.'functions/functions_general.php');






if (isset($_GET['page']))
{
    echo ("get page=".$_GET['page']);
    head($_GET['page'],$localisation);
    header($_SESSION['name'],$_SESSION['statut']);

    switch ($_GET['page'])
    
    
    {
        
        
        //############################## inscription ################################
        
        
        
        
        //##############################    connexion   ############################
        
        case 'connection':
            require ($localisation.'user/controller/connection_controller.php');
            require ($localisation.'user/model/session.php');
            break;
            
        
        //############################   admin  ###########################
        
        case 'admin_user_list':
            require ($localisation.'admin/controller/admin_user_list_controller.php');
            break;
           
            
       case 'admin_install_number_list':
            require ($localisation.'admin/controller/admin_install_number_list_controller.php');
            break;
            
        case 'admin_catalogue':
            require ($localisation.'admin/controller/admin_catalogue_controller.php');
            break;
            
        case 'admin_mentions_legales' :
            require ($localisation.'admin/controller/admin_mentions_legales_controller.php');
            break;
        case 'admin_faq':
            require ($localisation.'admin/controller/admin_faq_controller.php');
            break;
        /*default:
            echo ("erreur 404");*/
        
        
        //################################   user  ##########################
        
            //--------------------inscription de l'user-------------------------
            
         case 'user_subscribe':
             require ($localisation.'user/controller/user_subscribe_controller.php');
             break;
             
         case 'user_profile' :
             require ($localisation.'user/controller/user_profile_controller.php');
             break;
             
        
          
    }
}

else 
{
    echo ("site commercial");
    header($_SESSION['name'],$_SESSION['statut']);
}