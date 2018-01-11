<?php 
    require ("../connect.php");
    require ($nomDossier."model/action_model.php");
    

        // on test la valeur de la checkbox admin
        if (isset($_POST['is_admin'])){
            $admin=1;
        }
        else{
            $admin=0;
        }
        
        
        // on update les nouvelles valeurs
 
        updateUser($_POST['id_user'],$_POST['name'],$_POST['email'],$_POST['phone_number'],$admin,0);
        
        ?>
        <script type="text/javascript">
        window.location.href = '<?php echo ($nomwamp."index.php"); ?> ';
        </script>
       






?>