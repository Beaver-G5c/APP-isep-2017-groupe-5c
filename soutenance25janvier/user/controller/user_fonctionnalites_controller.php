<?php
  
  $_SESSION['ID_installation']=2;
  require ($localisation.'user/view/user_fonctionnalites_view.php');

if (isset($_POST['lumiere_all']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/user_fonctionnalites_model.php');
    lumiere_all($bdd);


  }


if (isset($_POST['lumiere_et']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');
    lumiere_et($bdd);

  }

if (isset($_POST['chauffage_all']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');
    chauffage_all($bdd);

  }

if (isset($_POST['chauffage_et']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');
    chauffage_et($bdd);

  }

if (isset($_POST['fen_ouvre']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');
    fen_ouvre($bdd);
  }

if (isset($_POST['fen_ferme']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');
    fen_ferme($bdd);

  }

if (isset($_POST['ouvr_volets']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');
    ouvr_volets($bdd);

  }

if (isset($_POST['ferme_volets']) AND isset($_POST['submit']) AND isset($_POST['selec_salle'])) 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');
    ferme_volets($bdd);

  }

if ( isset($_POST['submit2']) AND isset($_POST['id_capteur']) AND $_POST['act_inactif']=='active') 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');

    activer_capteur($bdd);

  }

if ( isset($_POST['submit2']) AND isset($_POST['id_capteur']) AND $_POST['act_inactif']=='inactive') 
  { 
    require ($localisation.'user/model/fonctionnalites_model.php');

    desactiver_capteur($bdd);
    

  }

?>