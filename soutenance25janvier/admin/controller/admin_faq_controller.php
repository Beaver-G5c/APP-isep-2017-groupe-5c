<?php

	require ($localisation.'admin/model/admin_faq_model.php');
	require ($localisation.'admin/view/admin_faq_view.php');

    
    //Quand on appuie sur le bouton submit on vÃ©rifie toutes les valeurs 
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
	     // dans le cas d'un edit on doit getter les données concernant cette FAQ pour pouvoir les afficher en value dans le formualaire de modif
	     // cette partie du code ne sert qu'à l'affichage du formulaire de modification 
	     $categories_array=getFaqCategories($bdd);
	     updateForm(getQuestionData($bdd,$_POST['id_faq']),$categories_array);	 
	 }
        
     if (isset ($_POST['edit2']))
        {
            // cette partie sert a modifier de fait en fonction des données entrées dans le formulaire
            //l'avantage est que par défaut il y comme value dans le form les valeurs enregistrée dans la base
            // cela permet que si la personne ne veut pas modifier certaines choses elle n'a qu'a ne pas les toucher dans le form
            edit_faq_admin($_POST['question'], $_POST['answer'], $_POST['category'], $_POST['id_faq'],$bdd);
            // on montre la nouvelle table modifiée
            displayTable ($bdd,$localisation);
		 	
        }
	
        
  
     else    
        {
            // dans le cas ou c'est la premiere fois qu'on arrive sur la page on montre la liste des FAQ enregistrées ainsi que le formulaire pour 
            // en ajouter
            $categories_array=getFaqCategories($bdd);
            addForm($categories_array);
            $faqList=getFaqList($bdd);
            
            displayTable ($faqList);
            
            
            
         }
        
        
       
    
?>
