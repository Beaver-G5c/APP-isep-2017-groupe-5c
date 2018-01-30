<div class="contour_fonc">
    <h1 class='titre_fonc'>GESTION DES FONCTIONNALITES</h1>
    <div class='display'>

    <div class='conteneur_fonc'>
    <form class='form_fonc' method="post" action=''>
    <p class='p_fonc'>Quelle pièce souhaitez vous modifier ? </p>

    <select name='selec_salle'>
    <?php 
    $ID_install=$_SESSION['ID_installation'];
    
    
    $req = $bdd->query('SELECT DISTINCT(nomdelasalle) FROM capteurs WHERE id_insta="'.$ID_install.'"');
   
    while($donnees = $req -> fetch() ){
      ?>
      <option><p><?php echo ($donnees['nomdelasalle']); ?></p> </option>
           <?php } ?>

            </select><br><br>
             
    <label>Action à effectuer :</label><br>
      <input type="checkbox" name='lumiere_all'/> <label>Allumer les lumières</label><br />
      <input type="checkbox" name='lumiere_et'/> <label>Eteindre les lumières</label><br />
      <input type="checkbox" name='chauffage_all'/> <label>Allumer le chauffage</label><br />
      <input type="checkbox" name='chauffage_et'/> <label>Eteindre le chauffage</label><br />
      <input type="checkbox" name='fen_ouvre'/> <label>Ouvrir les fenètres</label><br />
      <input type="checkbox" name='fen_ferme'/> <label>Fermer les fenètres</label><br />
      <input type="checkbox" name='ouvr_volets'/> <label>Ouvrir les volets</label><br />
      <input type="checkbox" name='ferme_volets'/> <label>Fermer les volets</label><br />
       
       

      <input type='submit' name='submit' class='envoyer_fonc' value='Enregistrer' />
      </form>
    </div>
    <div class='conteneur_fonc'>
    <p class='p_fonc'>gerer les activateurs individuellement<br>
    Veuillez selectionner le nom de l'activateur correspondant</p>
    <form class='form_fonc' method="post" action=''>
    <select name='nom_du_capteur'>
    <?php 
    
    
    $ID_install=$_SESSION['ID_installation'];
    
    $req = $bdd->query('SELECT * FROM capteurs WHERE type=1 AND id_insta="'.$ID_install.'" OR type=10 AND id_insta="'.$ID_install.'" OR type=9 AND id_insta="'.$ID_install.'" OR type=8 AND id_insta="'.$ID_install.'" OR type=7 AND  id_insta="'.$ID_install.'"');
   
    while($donnees = $req -> fetch() ){
      ?>
      <option><p><?php echo ($donnees['nom_du_capteur']); ?></p> </option>
           <?php } ?>

            </select>
    <select name='act_inactif'>
    <option value='active'><p>Activer</p></option>
    <option value='inactive'><p>Desactiver</p></option>
    </select>
    <input type='submit' name='submit2' class='envoyer_fonc' value='Enregistrer' />
    </form>
    </div>
    </div>
    </div>

    </div>