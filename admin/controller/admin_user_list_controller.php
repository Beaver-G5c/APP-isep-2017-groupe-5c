<?php

require ($localisation.'admin/view/admin_user_list_view.php');

if (isset ($_POST['submit'])){
    echo ($_POST['submit']);
    
    if ($_POST['submit']=='Supprimer'){
        require ($localisation.'admin/model/admin_user_list_model.php');
        
        dropUser($_POST['id_user']);
        require ($localisation."admin/view/admin_user_list_view.php");
    }
    
    if ($_POST['submit']=='Modifier')
    {
        //require()
        $dataUser=getInfo($_POST['id_user'],$bdd);
        updateUserForm($dataUser);
        

    }
    
    if ($_POST['submit']=='Ajouter')
    {
        require ($localisation.'admin/controller/admin_add_user_controller.php');
        echo('ona  appuyé sur ajouter');       
    }
    
}





if (isset ($_POST["submit_2"]))

{
    
    // ------------------test pour la variable admin ----------------
    
    if (isset($_POST['is_admin']))
        $is_admin=1;
    else 
        $is_admin=0;

    updateUser($_POST['id_user'],$_POST['name'],$_POST['email'],$_POST['phone_number'],$is_admin,0,$bdd);
    display_list($bdd);

    
}
else
{
    
    display_list($bdd);
    
}
 
	
	

