<?php 
/* on est ici sur l'index du site qui gère l'intégralité de son fonctionnement
 * 
 * Ce fichier est central dans le bon fonctionnement du site
 * la page est organisée de la façon suivante :
 * 
 * on a deux switch imbriqués l'un dans l'autre
 * Le premier sur le statut de la personne sur le site
 * de base c'est visitor 
 * ensuite si la personne se connect ca peut devenir soit admin soit user
 * Cela permet de faire en sorte que seuls les admin puissent avoir acces aux pages admin et seuls les users ont accés à leur pages
 * ensuite le deuxieme switch imbriqué sert à choisir quel controleur on va require en fonction de la page qui nous est demandée
 * celle-ci est stockée dans la variable $_GET['page']
 */
session_start();
$localisation="C:/wamp64/www/testthiboo/APP/version_soutenance2/";
//-------------------- creation de la session ------------------------

require_once ($localisation.'user/model/session_declaration.php');



require ('connect.php');










// -------------------require des fonctions----------------------------
require ($localisation.'functions/functions_security.php');
require ($localisation.'functions/functions_user.php');
require ($localisation.'functions/functions_admin.php');
require ($localisation.'functions/functions_general.php');
require ($localisation.'functions/functions_header.php');
require ($localisation.'functions/functions_footer.php');





if (!isset($_GET['page'])){
    // dans le cas ou la variable n'est pas set on redirige vers la home page du site web
    $_GET['page']='website_home_page';
}



    // on crée le head avec le style et le title
    head($_GET['page'],$localisation);
    // le header dépend du statut de la personne (user, admin, ou visitor)
    header_1($_SESSION['statut']);

    
    
    switch ($_SESSION['statut']){
        
        
        case  'visitor' :
    
            switch ($_GET['page'])
             {
        
        
                //############################## inscription ################################
                case 'user_subscribe':// fonctionne 
                    require ($localisation.'user/controller/user_subscribe_controller.php');
                    break;
        
        
        
                //##############################    connexion / deconnexion  ############################
        
                case 'connection':
                    require ($localisation.'user/controller/connection_controller.php');
                    //require ($localisation.'user/model/session.php');
                    // dans le cas d'une connexion le statut change le fichier ci dessus sert à faire évoluer la variable $_SESSION['statut']
                    break;
			
		        case 'user_forgotten_password':// fonctionne 
                    require ($localisation.'user/controller/user_forgotten_password_controller.php');
                    break;
			
		        case 'deconnection':
			        require ($localisation.'user/controller/deconnection_controller.php');
			        break;
			        
			        //############################## site de promo ###########################
			        
		        case 'website_home_page':
		            require ($localisation.'promo_website/website_home_page.php');
		            break;
		        case 'website_assistance':
		            require($localisation.'promo_website/website_assistance.php');
		            break;
		        
		        case 'user_faq'://fonctionne
		            require ($localisation.'user/controller/user_faq_controller.php');
		            break;
		            
		        case 'website_catalogue':
		            require($localisation.'promo_website/website_catalogue_controller.php');
		            break;
		          
		        default :
		            echo ($_SESSION['statut']);
		            echo "erreur 404";
		            break;
			        
                }
            
            break;
            
            
        case 'admin' :
                //############################   admin  ###########################
    			
            switch ($_GET['page'])
            {
        
        	   case 'admin_user_list':// fonctionne
            	   require ($localisation.'admin/controller/admin_user_list_controller.php');
            	   break;
           
            
        	   case 'admin_install_number_list':// fonctionne
            	   require ($localisation.'admin/controller/admin_install_number_list_controller.php');
            	   break;
            
        	   case 'admin_catalogue'://fonctionne
            	   require ($localisation.'admin/controller/admin_catalogue_controller.php');
            	   break;
            
        	   case 'admin_mentions_legales' ://ne fonctionne pas totalement
            	   require ($localisation.'admin/controller/admin_mentions_legales_controller.php');
            	   break;
        	   case 'admin_faq':// fonctionne
            	   require ($localisation.'admin/controller/admin_faq_controller.php');
            	   break;
			   case 'admin_alert'://fonctionne
				   require ($localisation.'admin/controller/admin_alert_controller.php');
				   break;
			   default :
			       echo ($_SESSION['statut']);
			       echo ('erreur 404');
			       break;
            }
            break;
        
            
        case 'user' :
            
        //################################   user  ##########################
            switch ($_GET['page']){
        

         	  case 'user_profile' :// fonctionne --> refaire des tests sur la modif mot de passe
            	   require ($localisation.'user/controller/user_profile_controller.php');
            	   break;
             
         	  case 'user_room_management':// ne fonctionne pas
            	   require ($localisation.'user/controller/user_gestion_salle_controller.php');
             	   break;
        
          
             
         
         
              case 'user_faq'://fonctionne
                   require ($localisation.'user/controller/user_faq_controller.php');
                   break;
              case 'user_catalogue' :
                   require ($localisation.'user/controller/user_catalogue_controller.php');
                   break;
                   
              case 'user_programmation' :
                  require ($localisation.'user/controller/user_programmation_controller.php');
                  break;
                  
              case 'user_fonctionalite' :
                  require ($localisation.'user/controller/user_fonctionnalites_controller.php');
                  break;
                  
              case 'user_gestion_manuelle' :
                  require ($localisation.'user/controller/user_gestion_manuelle_controller.php');
                  break;
               
                  
              
              default :
                  echo ($_SESSION['statut']);
                  echo "erreur 404";
                  break;
			     
            }
            break;
    }


footer_website();
// le footer est toujours le meme


endOfFile();
// les balises pour fermer <body> et <html>