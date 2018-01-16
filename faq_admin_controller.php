<?php

    require('faq_admin_model.php');
    empty ($_POST['submit']);
    
    //Quand on appuie sur le bouton submit on vérifie toutes les valeurs 
    if (isset($_POST['submit'])) 
        {
           
            add_faq($_POST ['question'], $_POST['answer'], $_POST['category'],$bdd);
        }
         
    if (isset($_POST['delete']))
        {
     
            delete_faq_admin($_POST['id_faq'],$bdd);
        }
        
        
        
     if (isset ($_POST['edit2']))
        {
            
            edit_faq_admin($_POST['question'], $_POST['answer'], $_POST['category'], $_POST['id_faq'],$bdd);
            include('faq_admin_view.php');
        }
        
  
     else    
        {
            include('faq_admin_view.php');
         }
        
        
       
    
?>
