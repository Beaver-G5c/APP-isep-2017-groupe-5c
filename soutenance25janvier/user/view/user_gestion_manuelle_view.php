   <h1 class='gestion'>GESTION MANUELLE</h1>

    <div class="conteneur_gestion">
    
    <div class="element_gestion">
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

    <div class="reveil_gestion">
    <p>Horaire du réveil</p>
    <form method="post" action="" >
    <input type="number" value='0' name='heure' min="00" max="23" size='1' /> h 
    <input type="number" value='0' name='minutes' min="00" max="59" size='1'/> min
    <input type='submit'  class='connecter' name='reveil' value='Activer' /><br><br>
     <input type='submit'  class='connecter' name='reveil_des' value='Desactiver' />
    </form>
    </div>

    <div class="chauffer_gestion">
    <p>Activer le chauffage</p>
    <form method="post" action="">
    <input type='submit'  class='connecter' name='chauffer' value='Activer' />
    <input type='submit'  class='connecter' name='chauffer_des' value='Desactiver' />
    </form>
    </div>

    <div class='boutons_gestion'>
    <form method="post" action="">
    <input type='submit'  class='nocturne2_gestion' name='ouvrirfen' value='Ouvrir toutes les fenetres' />
    <input type='submit'  class='nocturne2_gestion' name='allum_lum' value='Allumer toutes les lumières' />
    <input type='submit'  class='nocturne2_gestion' name='et_lum' value='Eteindre toutes les lumières' />
    <input type='submit' name='fermerfen' class='nocturne2_gestion' value='Fermer toutes les fenetres' />
    <input type='submit' name='alarme' class='nocturne2_gestion' value='Activer l alarme' />
    <input type='submit' name='ouvrevolets' class='nocturne2_gestion' value='Ouvrir tous les volets' />
    <input type='submit' name='fermevolets' class='nocturne2_gestion' value='Fermer tous les volets' />
    <input type='submit' name='vacances' class='nocturne2_gestion' value='Mode vacances' />
</form>   
    <a href='index.php?page=fonctionnalites'><input type='submit' name='submit' class='nocturne2_gestion' value='Gerer les élements' /></a>

</div>

    </div>