<?php 
function head($page,$localisation){
    ?>
    <!DOCTYPE html>
    	<html>
    	<head>
    		<meta charset='utf-8' />
    		<link rel='stylesheet' href='style.css' />
    		<title><?php echo ($page);?></title>
    	</head>
    
    	<body background='promo_website/images/wallpaper.png'>
    
<?php }?>

<?php
function header_1($statut)
{
 	
    
    switch  ($statut)
    {
        case 'admin' :
            header_admin();
            break;
        case 'visitor' :
            header_visitor();
            break ;
        case 'user':
            header_user();
            break;
        
        //default:
            //header_basique();
            
    }
  
}




?>
<?php
function getInstallNumberFromIdUser($id_user,$bdd){
	
	$reponse=$bdd -> query('SELECT install_number FROM install_number WHERE id_user="'.$id_user.'" ');
	$donnees=$reponse->fetch();
	return $donnees;
}


function endOfFile(){
    ?>
    </body>
    </html>
<?php }?>

