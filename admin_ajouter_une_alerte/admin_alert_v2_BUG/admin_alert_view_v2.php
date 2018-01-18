<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_alert.css">
        <title>Gestion des notifications</title>

        
    </head>

    <body background='wallpaper.png'>


        <h1 class = titre> Ajouter une alerte :</h1>
            <div class = zone>
                <form method='POST' action=''>
                    <label>Nom : <br><input type='text' name='name' class='formulaire' placeholder='Ex:Erreur 404 ' required /> </label><br>
                    <label>Description : <br><input type='text' name='description' class='formulaire' placeholder='Ex: Capteur en panne ' required /> </label><br>
                    <label>Niveau d'alerte /10 : <br><input type='number' name='lvl_alert' class='formulaire' placeholder=' Ex: 3' required/></label><br>
                    <label>ID de l'user concerne : <br><input type='number' name='id_user_target' class='formulaire' placeholder=' Ex: 15' required/></label><br>
                    <label>Type d'alerte : <br><input type='text' name='type_alert' class='formulaire' placeholder='Ex: capteur defectueux' required /> </label><br>
                    <label><input type="hidden" value="<?php echo($_SESSION["ID_notification"]);?>" name="ID_alert" class = "formulaire" /></label>
                    <input type="submit" name="submit">
                </form>
                <p class = texte>Si cette alerte est a l'attention de tous les utilisateurs, mettre 0 dans la categorie "ID de l'user concerne" <br></p>
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