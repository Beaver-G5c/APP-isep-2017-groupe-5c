<?php
if (isset($_POST['salles'])) {
    $choix=$_POST['salles'];
    
}
else {
    $choix='';
}
if(isset($_POST['position_angulaire']) AND $_POST['id_position']){
    $captangle= $_POST['id_position'];
}
elseif (!isset($_POST['position_angulaire'])){
    $captangle=0;
}
if(isset($_POST['cc2650']) AND $_POST['id_cc2650']){
    $capt2650= $_POST['id_cc2650'];
}
elseif (!isset($_POST['cc2650'])){
    $capt2650=0;
}
if(isset($_POST['capteur_luminosite']) AND $_POST['id_luminosite']){
    $captluminosite= $_POST['id_luminosite'];
}
elseif (!isset($_POST['capteur_luminosite'])){
    $captluminosite=0;
}
if(isset($_POST['detecteur_de_fumee']) AND $_POST['id_fumee']){
    $captfumee= $_POST['id_fumee'];
}
elseif (!isset($_POST['detecteur_de_fumee'])){
    $captfumee=0;
}
if(isset($_POST['capteur_presence']) AND $_POST['id_presence']){
    $captpresence= $_POST['id_presence'];
}
elseif (!isset($_POST['capteur_presence'])){
    $captpresence=0;
}
if(isset($_POST['capteur_contact']) AND $_POST['id_contact']){
    $captcontact= $_POST['id_contact'];
}
elseif (!isset($_POST['capteur_contact'])){
    $captcontact=0;
}
if (isset($_POST['modifsalle'])) {
    $choix_modifsalle=$_POST['modifsalle'];  }
    else {
        $choix_modifsalle=''; } 
        
$id_salle= rand();















require('../model/gestionsallemodel.php');
require('../view/gestionsalleview.php');
