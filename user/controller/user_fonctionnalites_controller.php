<?php

require ($localisation.'user/model/user_fonctionnalites_model.php');

if (isset($_POST['lumiere_all']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    
    lumiere_all($bdd);
    
    
}


if (isset($_POST['lumiere_et']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    lumiere_et($bdd);
    
}

if (isset($_POST['chauffage_all']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    chauffage_all($bdd);
    
}

if (isset($_POST['chauffage_et']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    chauffage_et($bdd);
    
}

if (isset($_POST['fen_ouvre']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    fen_ouvre($bdd);
}

if (isset($_POST['fen_ferme']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    fen_ferme($bdd);
    
}

if (isset($_POST['ouvr_volets']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    ouvr_volets($bdd);
    
}

if (isset($_POST['ferme_volets']) AND isset($_POST['submit']) AND isset($_POST['selec_salle']))
{
    ferme_volets($bdd);
    
}

if ( isset($_POST['submit2']) AND isset($_POST['nom_du_capteur']) AND $_POST['act_inactif']=='active')
{
    
    activer_capteur($bdd);
    
}

if ( isset($_POST['submit2']) AND isset($_POST['nom_du_capteur']) AND $_POST['act_inactif']=='inactive')
{
    
    
    desactiver_capteur($bdd);
    require ($localisation.'user/view/user_fonctionnalites_view.php');
    
    
}

else
{
    require ($localisation.'user/view/user_fonctionnalites_view.php');
}
?>