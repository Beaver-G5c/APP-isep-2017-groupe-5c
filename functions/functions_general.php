<?php 
function head($page,$localisation){
    ?>
    <!DOCTYPE html>
    	<html>
    	<head>
    		<meta charset='utf-8' />
    		<link rel='stylesheet' href='<?php echo ($localisation.'style.css');?>' />
    		<title><?php echo ($page);?></title>
    	</head>
    
    	<body>
    
<?php }?>

<?php
/*function header($name,$statut)
{
 
    
    switch  ($statut)
    {
        case 'admin' :
            header_admin($name);
            break;
        case 'disconnected' :
            header_disconnected();
            break ;
        case 'user':
            header_user($name);
            break;
        
        default:
            header_basique();
            
    }
  
}




*/?>