<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="stylegastion_manu.css" />
        <title>Gestion Manuelle</title>
    </head>

    <body>
    <?php include("header.php");?>


    <h1>GESTION MANUELLE</h1>

    <div class="conteneur">
    
    <div class="element">
    <p><strong>informations générales </strong>:</p>
    <p>Température intérieure :</p>
    <?php echo ' 18 °c' ?>
    <p>Qualité de l'air : </p>
    <?php echo ' bonne' ?>
    <p>Salles éclairées</p>
    </div>

    <div class="element">
    <p><strong>Notifications</strong> :</p>
    </div>

    <div class="reveil">
    <p>Horaire du réveil</p>
    <form method="post" action="gestion_manu_controller.php">
    <input type="number" name='heure' min="00" max="23" size='1' />
    <input type="number" name='minutes' min="00" max="59" size='1'/>
    <input type='submit'  class='connecter' name='reveil' value='Envoyer' />
    </form>
    </div>

    <div class="chauffer">
    <p>Chauffer jusqu'à</p>
    <form method="post" action="gestion_manu_controller.php">
    <input type="number" name='temperature' min='00' max='35' size='5' step='1' />
    <input type='submit'  class='connecter' name='chauffer' value='Envoyer' />
    </form>
    </div>

    <input type='submit'  class='nocturne' name='submit' value='Mode nocturne' />
    <input type='submit'  class='nocturne2' name='submit' value='Ouvrir toutes les fenetres' />
    <input type='submit' name='submit' class='nocturne2' value='Fermer toutes les fenetres' />
    <input type='submit' name='submit' class='nocturne2' value='Ouvrir tous les volets' />
    <input type='submit' name='submit' class='nocturne2' value='Fermer tous les volets' />
    <a href='header.php'><img class='petit_plus' src="plus.png" alt="plus" title="créer un programme"/></a>
    </div>

    </body>

<?php include("footer.php");?>
</html>

