
    <h1>GESTION MANUELLE</h1>

    <div class="conteneur">
    
    <div class="element">
    <p><strong>informations générales </strong>:</p>
    <p>Température intérieure :</p>

  <?php 

    $ID_install=$_SESSION['ID_installation'];

    $req = $bdd->query('SELECT valeur1, nomdelasalle FROM capteurs WHERE id_insta="'.$ID_install.'"  AND type=3 AND actif=1');
    while ($donnees = $req->fetch()){
        ?>

        <p><?php echo ($donnees['valeur1']); ?> °C dans le/la <?php echo ($donnees['nomdelasalle']); ?></p>

    <?php }
    ?>


    <p>Qualité de l'air : </p>

    <?php

    $ID_install=$_SESSION['ID_installation'];


    $req = $bdd->query('SELECT valeur2, nomdelasalle FROM capteurs WHERE id_insta="'.$ID_install.'"  AND type=3 AND actif=1');
   
    while ($donnees = $req->fetch()){

        ?>

        <?php if($donnees['valeur2']<=300){ ?>
        <p>mauvaise dans <?php echo ($donnees['nomdelasalle']); ?></p>

    <?php }
elseif($donnees['valeur2']>300){ ?>
<p>bonne dans <?php echo ($donnees['nomdelasalle']); ?></p>


<?php }}
    ?>




    <p>Salles éclairées :</p>

    <?php

    $ID_install=$_SESSION['ID_installation'];

    $req = $bdd->query('SELECT DISTINCT(nomdelasalle) FROM capteurs WHERE id_insta="'.$ID_install.'" && type=1 && actif=1');
   
    while($donnees = $req -> fetch() ){
      ?>
      <option><p><?php echo ($donnees['nomdelasalle']); ?></p> </option>
           <?php } ?>

    </div>

    <div class="reveil">
    <p>Horaire du réveil</p>
    <form method="post" action="" >
    <input type="number" value='0' name='heure' min="00" max="23" size='1' /> h 
    <input type="number" value='0' name='minutes' min="00" max="59" size='1'/> min
    <input type='submit'  class='connecter' name='reveil' value='Activer' /><br><br>
     <input type='submit'  class='connecter' name='reveil_des' value='Desactiver' />
    </form>
    </div>

    <div class="chauffer">
    <p>Activer le chauffage</p>
    <form method="post" action="">
    <input type='submit'  class='connecter' name='chauffer' value='Activer' />
    <input type='submit'  class='connecter' name='chauffer_des' value='Desactiver' />
    </form>
    </div>

    <div class='boutons'>
    <form method="post" action="">
    <input type='submit'  class='nocturne2' name='ouvrirfen' value='Ouvrir toutes les fenetres' />
    <input type='submit'  class='nocturne2' name='allum_lum' value='Allumer toutes les lumières' />
    <input type='submit'  class='nocturne2' name='et_lum' value='Eteindre toutes les lumières' />
    <input type='submit' name='fermerfen' class='nocturne2' value='Fermer toutes les fenetres' />
    <input type='submit' name='alarme' class='nocturne2' value='Activer l alarme' />
    <input type='submit' name='ouvrevolets' class='nocturne2' value='Ouvrir tous les volets' />
    <input type='submit' name='fermevolets' class='nocturne2' value='Fermer tous les volets' />
    <input type='submit' name='vacances' class='nocturne2' value='Mode vacances' />
    
    <a href='../controler/creation_prog_controler.php'><input type='submit' name='submit' class='nocturne2' value='Gerer les élements' /></a>
</form>
</div>

    </div>
