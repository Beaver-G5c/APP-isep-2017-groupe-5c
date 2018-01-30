<?php

require ($localisation.'admin/view/admin_user_list_view.php');
require ($localisation.'admin/model/admin_user_list_model.php');
require ($localisation.'admin/view/admin_add_user_view.php');
require ($localisation.'admin/model/admin_add_user_model.php');

if (isset ($_POST['submit'])){
 
    
    if ($_POST['submit']=='Supprimer'){
        
        
        dropUser($_POST['id_user'],$bdd);
        
    }
    
    if ($_POST['submit']=='Modifier')
    {
        //require()
        $dataUser=getInfo($_POST['id_user'],$bdd);
        updateUserForm($dataUser);
        

    }
    
    if ($_POST['submit']=='Ajouter un admin')
    {
        addUserForm();
          
    }
    
}







if (isset ($_POST["submit_2"]))

{
    
    // ------------------test pour la variable admin ----------------
    
    if (isset($_POST['is_admin']))
        $is_admin=1;
    else 
        $is_admin=0;
    // modif de l'user 
    updateUser($_POST['id_user'],$_POST['name'],$_POST['email'],$_POST['phone_number'],$is_admin,0,$bdd);
    userUpdated();
    //$userArray=getListOfUsers($bdd);
    //display_list($userArray);

    
}




if (isset($_POST['submit_action']))

{
    
    
    //------- on verifie si le name est bien libre !

    if (!is_login_free($_POST['name'],$bdd))
    
    
    // le login est deja pris on reaffiche le formulaire
    {
        
        
        alreadyTakenLogin();
        addUserForm();
        
        
        
    }
    
    
    
    else
    {
        
        if (isset($_POST['is_admin']))
        {
            $is_admin=1;
        }
        
        else
        {
            $is_admin=0;
        }
        // appel a la fonction situee dans subscribe_model3.php
        add_user($bdd,input_securisation($_POST['name']),input_securisation($_POST['email']),input_securisation($_POST['password']),input_securisation($_POST['telephone']),input_securisation($_POST['secret_question']),input_securisation($_POST['secret_answer']),$is_admin,0,input_securisation($_POST['insta']));
        
        
        // on verifie que l'install number est libre
        
        
        
        if (get_id_from_name(input_securisation($_POST['name']),$bdd)){
            
            // on est dans ce cas si l'install number fonctionne ducoup la fonction ajoute l'id de l'user dans la table install number
            // ensuite on le notifie a l'admin
            //addUserForm();
            view_user_added();
            
            // affichage de la liste des utilisateurs
            
            $userArray=getListOfUsers($bdd);
            display_list($userArray);
            ?>
			
			
       		<?php 
		}
		
	
	 	}
	}


	
else
{
    
    $userArray=getListOfUsers($bdd);
    display_list($userArray);
    
    
}
 
	
	

