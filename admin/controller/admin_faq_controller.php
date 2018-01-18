<?php

	require ($localisation.'admin/model/admin_faq_model.php');
	require ($localisation.'admin/view/admin_faq_view.php');
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
        
     if (isset($_POST['edit']))
	 {
	       
	       updateForm(getQuestionData($bdd,$_POST['id_faq']));	 
	 }
        
     if (isset ($_POST['edit2']))
        {
            
            edit_faq_admin($_POST['question'], $_POST['answer'], $_POST['category'], $_POST['id_faq'],$bdd);
            addForm();
            displayTable ($bdd,$localisation);
		 	
        }
	
        
  
     else    
        {
            addForm();
            displayTable ($bdd,$localisation);
		 	echo 'hey2';
         }
        
        
       
    
?>
