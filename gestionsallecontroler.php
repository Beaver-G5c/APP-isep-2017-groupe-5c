<?php

if (isset($_POST['salles'])) {
    $choix=$_POST['salles'];
    
}
else {
    $choix='';
}

if (isset($_POST['modifsalle'])) {
    $choix_modifsalle=$_POST['modifsalle'];  }
    else {
        $choix_modifsalle=''; }

require('../model/gestionsallemodel.php');
require('../view/gestionsalleview.php');