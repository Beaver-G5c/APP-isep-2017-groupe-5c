  
  
  <div class='conteneur_prog'>
    <h1 class='titre_prog'>PROGRAMMATION</h1>
    <form  method="post" action=''>
    <input type='submit'  class='actualiser_prog' name='actualiser' value='Actualiser' />
    </form>

    <div class='conteneur2_prog'>
    <div class=element_prog>
    <form method="post" action="">
    <span class='span_prog'>Actions à effectuer quotidiennement</span><br>
    <label>Veuillez donner un nom à votre action :</label><br><br>
    <input type="text" required='required' name='nom_scenario' maxlength="255" size='14' />
    <br><br>
    <p> Quelle action souhaitez-vous executer ?</p>
    <select name='liste_der'>
            <option value='allum_lum'>Allumer les lumières</option>
            <option value='et_lum'>Eteindre les lumières</option>
            <option value='allum_chauff'>Allumer le chauffage</option>
            <option value='et_chauff'>Eteindre le chauffage</option>
            <option value='ouvr_fen'>Ouvrir les fenètres</option>
            <option value='ferm_fen'>Fermer les fenètres</option>
            <option value='ouvr_vol'>Ouvrir les volets</option>
            <option value='ferm-vol'>Fermer les volets</option>
    </select>
    <p>   dans   </p>
    <select name='selec_salle'>
    <?php 
    
    $ID_install=$_SESSION['ID_installation'];
    $req = $bdd->query('SELECT DISTINCT(nomdelasalle) FROM capteurs WHERE id_insta="'.$ID_install.'"');
   
    while($donnees = $req -> fetch() ){
      ?>
      <option><p><?php echo ($donnees['nomdelasalle']); ?></p> </option>
           <?php } ?>

            </select><br><br>
    
    <p>De <input type="time" name='heure_deb' size='1' /> à <input type="time" name='heure_fin' size='1' /></p>
    <input type='submit'  class='Activer_prog' name='Activer' value='Activer' />
    </form>
    </div>

    <div class='element_prog'>
    <span class='span_prog'>Gerer un activateur individuellement</span><br>
    
    <form method="post" action=''>

    <label>Veuillez donner un nom à votre action :</label><br><br>
    <input type="text" required='required' name='nom_scenario2' maxlength="255" />
    <p>Veuillez selectionner le nom de l'activateur correspondant</p>
    <select name='nom_du_capteur'>
    <?php 
    $ID_install=$_SESSION['ID_installation'];
    $req = $bdd->query('SELECT * FROM capteurs WHERE type=1 AND id_insta="'.$ID_install.'" OR type=10 AND id_insta="'.$ID_install.'" OR type=9 AND id_insta="'.$ID_install.'" OR type=8 AND id_insta="'.$ID_install.'" OR type=7 AND id_insta="'.$ID_install.'" ');
   
    while($donnees = $req -> fetch() ){
      ?>
      <option><p><?php echo ($donnees['nom_du_capteur']); ?></p> </option>
           <?php } ?>

            </select>
        <p> Souhaitez-vous activer ou desactiver cet activateur ?</p>
    <select name="on_off">
        <option value='actif_cap'>activer</option>
        <option value='inactif_cap'>desactiver</option>
    </select><br><br>
    <p>De <input type="time" name='heure_deb' size='1' /> à <input type="time" name='heure_fin' size='1' /></p>
    <input type='submit'  class='Activer_prog' name='Activer2' value='Activer' />
    </form><br>
    </div>
    
    <div class=element_prog>
    <span class='span_prog'>Supprimer un scenario</span>
    <form method="post" action=''>
    <p>Selectionnez le scenario que vous souhaitez supprimer</p>
    <select name='SCENARIO'>
    <?php 
    
    $ID_install=$_SESSION['ID_installation'];
    $req = $bdd->query('SELECT * FROM scenario WHERE id_insta="'.$ID_install.'"');
   
    while($donnees = $req -> fetch() ){
      ?>
      <option><p><?php echo ($donnees['nom_scenario']); ?></p> </option>
           <?php } ?>

            </select><br><br>

    <input type='submit'  class='desactiver_prog' name='Desactiver2' value='Desactiver' />
    </form><br><br>
    </div>
    </div>

    
    </div>