<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_alert.css">
        <title>Gestion des notifications</title>

    </head>

    <body background='wallpaper.png'>

        <?php 
        
        /*
        $data= get_data_notif($_SESSION['modif_alert_id'], $_SESSION['modif_alert_text'], $_SESSION['modif_user_id'], $_SESSION['modif_alert_state'], $_SESSION['modif_alert_name'], $_SESSION['modif_alert_lvl'], $_SESSION['modif_alert_type']);
        echo $data;
        

        $requete=$bdd->query("SELECT * FROM `notification` WHERE `ID_notif`>=".$_POST['ID_alert']."");
        $data=$requete->fetch();
        */
        
        ?>


        <h1 class = titre> Modifier une alerte :</h1>
        	<div class = zone>
        		<br>
	            <form method='POST' action='admin_modif_alert_controler_v2.php'>
	            	<label><br><input type='hidden' name='alert_id' class='formulaire' value= "<?php echo ($_POST['ID_alert'])?>" /></label><br>
	                <label>Nom : <br><input type='text' name='alert_name' class='formulaire' value="<?php echo($data['notif_name'])?>"  /> </label><br>
	                <label for="description">Description : <br></label><textarea name="description" class = 'formulaire'> <?php echo($data['notif_description'])?> </textarea><br>
	                <label>Niveau d'alerte /10 : <br><input type='number' name='alert_lvl' class='formulaire' value="<?php echo($data['notif_lvl'])?>" /></label><br>
	                <label>ID de l'user concerne : <br><input type='number' name='user_id' class='formulaire' value="<?php echo($data['ID_user'])?>" /></label><br>
	                <label>Type d'alerte : <br><input type='text' name='alert_type' class='formulaire' value="<?php echo($data['notif_type'])?>" /> </label><br>
	                <label>Etat de l'alerte : <br><input type='text' name='alert_state' class='formulaire' value="<?php echo($data['notif_statut'])?>" /> </label><br>
	                
	                <input type="submit" name="valider">
	                <br><br>

	            </form>
            
	            <p class = texte>Si cette alerte est a l'attention de tous les utilisateurs, mettre 0 dans la categorie "ID de l'user concerne" <br>
	            <a href='admin_alert_controler_v2.php?'>Ajouter une alerte</a></p>
            </div>

        <table>
            <tr>
                <th> ID alerte</th>
                <th> ID user</th>
                <th> Nom de l'alerte</th>
                <th> Description de l'alerte</th>
                <th> Niveau d'alerte</th>
                <th> Date de l'alerte </th>
                <th> Type d'alerte</th>
                <th> Statut </th>
                <th> Modifier l'alerte</th>
            </tr>
            
           
            <?php

                $request =$bdd->query('SELECT * FROM notification');
                while ($donnees = $request->fetch()){
                  
            ?>
            <tr>
                <td> <?php echo ($donnees['ID_notif']); ?> </td>
                <td> <?php echo ($donnees['ID_user'] ); ?> </td>
                <td> <?php echo ($donnees['notif_name']); ?> </td>
                <td> <?php echo ($donnees['notif_description']); ?> </td>
                <td> <?php echo ($donnees['notif_lvl']); ?> </td>
                <td> <?php echo ($donnees['notif_date']); ?> </td>
                <td> <?php echo ($donnees['notif_type']); ?> </td>
                <td> <?php echo ($donnees['notif_statut']); ?> </td>
                <?php /* c'est soit le lien soit le form
                <td> <a href='admin_modif_alert_controler.php?alert_id=$donnees["ID_notif"]'>Modifier</a></td> */ ?>
                <td>
                <form method = 'POST' action="admin_modif_alert_controler_v2.php">
                    <label><input type="hidden" value="<?php echo($donnees['ID_notif']);?>" name="ID_alert" class = "formulaire" /></label>
                    <input type="submit" name="submit2">
                </form>
               

            </tr>

            <?php }
            ?>
        </table>


            
    </body>

</html>