<?php

require ($localisation."admin/model/admin_statistics_model.php");

empty($_POST['submit']);

    if (isset($_POST['submit']))
    {
        
        table_notification($bdd);
    }
    
    else 
    {
        require ($localisation."admin/view/admin_statistics_view.php");
    }
?>