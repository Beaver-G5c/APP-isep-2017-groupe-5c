<?php

require ($localisation.'user/model/user_programmation_model.php');

if(isset($_POST['actualiser']))
{
    principale($bdd);
    princ($bdd);
}

if (isset($_POST['Activer']) AND $_POST['liste_der']=='allum_lum' )
{
    
    prog_lumiere_all($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
    
}

if (isset($_POST['Desactiver2']))
{
    
    desact_scenario($bdd);
}


if (isset($_POST['Activer']) AND $_POST['liste_der']=='et_lum' )
{
    
    prog_lumiere_et($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}






if (isset($_POST['Activer2']) AND $_POST['on_off']=='actif_cap' )
{
    
    actif_capteur($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}

if (isset($_POST['Activer2']) AND $_POST['on_off']=='inactif_cap' )
{
    
    inactif_capteur($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}






if (isset($_POST['Activer']) AND $_POST['liste_der']=='allum_chauff' )
{
    
    prog_chauff_all($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}




if (isset($_POST['Activer']) AND $_POST['liste_der']=='et_chauff' )
{
    
    prog_chauff_et($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}








if (isset($_POST['Activer']) AND $_POST['liste_der']=='ouvr_fen' )
{
    
    prog_fen_ouvr($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}




if (isset($_POST['Activer']) AND $_POST['liste_der']=='ferm_fen' )
{
    
    prog_fen_ferm($_POST['heure_deb'],$_POST['heure_fin'], $bdd);
}















if (isset($_POST['Activer']) AND $_POST['liste_der']=='ouvr_vol' )
{
    
    
    prog_vol_ouvr($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}



if (isset($_POST['Activer']) AND $_POST['liste_der']=='ferm_vol' )
{
    
    prog_vol_ferm($_POST['heure_deb'],$_POST['heure_fin'],$bdd);
}

else
{
    require ($localisation.'user/view/user_programmation_view.php');
}

?>

