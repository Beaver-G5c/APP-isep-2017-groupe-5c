<div class="contour">
    <h1>GESTION DES FONCTIONNALITES</h1>

    <div class='conteneur'>
    <form method="post" action=''>
    <p>Quelle pièce souhaitez vous modifier ? </p>

    <select name='selec_salle'>
    <?php 
    $req = $bdd->query('SELECT DISTINCT(nomdelasalle) FROM capteurs');
   
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
      <input type="checkbox" name='fen_ouvre'/> <label>Ouvrir les fenêtres</label><br />
      <input type="checkbox" name='fen_ferme'/> <label>Fermer les fenêtres</label><br />
      <input type="checkbox" name='ouvr_volets'/> <label>Ouvrir les volets</label><br />
       <input type="checkbox" name='ferme_volets'/> <label>Fermer les volets</label><br />
       
       </div>

      <input type='submit' name='submit' class='envoyer' value='Enregistrer' />
      </form>

    <p>gerer les activateurs individuellement<br>
    Veuillez selectionner l'ID de l'activateur correspondant</p>
    <form method="post" action=''>
    <select name='id_capteur'>
    <?php 
    $req = $bdd->query('SELECT DISTINCT(id_capteur) FROM capteurs');
   
    while($donnees = $req -> fetch() ){
      ?>
      <option><p><?php echo ($donnees['id_capteur']); ?></p> </option>
           <?php } ?>

            </select>
    <select name='act_inactif'>
    <option value='active'><p>Activer</p></option>
    <option value='inactive'><p>Desactiver</p></option>
    </select>
    <input type='submit' name='submit2' class='envoyer' value='Enregistrer' />
    </form>
    </div>

    </div>