<?php

    //Quand on appuie sur le bouton submit on vérifie toutes les valeurs
    if (!isset($_POST['submit'])) 
        {
        require("faq_admin_view.php");
        
        }
    
    else {
        
         require("faq_admin_model.php");
         add_faq($_POST['question'],$_POST['answer'],$_POST['category']);
         table_faq_admin($_POST['reponse'],$_POST['bdd'],$_POST['donnees']);
         
        }
            
    
?>
