<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="admin_notif.css">
        <title>Gestion des notifications</title>

        
    </head>

    <body background='wallpaper.png'>
        <?php include 'header-v2.2.html'; ?>

        <p> Ajouter une alerte :</p>
            <form method='POST' action='admin_alert_controler.php'>
                <label>Nom : <input type='text' name='name' class='nom' placeholder='Ex:Erreur 404 ' required /> </label><br>
                <label>Description : <input type='text' name='description' class='description' placeholder='Ex: Capteur en panne ' required /> </label><br>
                <label>Niveau d'alerte : <input type='number' name='lvl_alert' class='lvl_alert' placeholder=' Ex: 3' required/></label><br>
                <label>ID de l'user concerné : <input type='number' name='id_user_target' class='id_user_target' placeholder=' Ex: 15' required/></label><br>
                <label>Type d'alerte : <input type='text' name='type_alert' class='type_alert' placeholder='Ex: capteur defectueux' required /> </label><br>
                <input type="submit" name="valider">
            </form>
            <p>Si cette alerte est à l'attention de tous les utilisateurs, mettre 0 dans la catégorie "ID de l'user concerné" </p>

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
            </tr>
            
           
            <?php
                require("admin_alert_model.php");
                while ($donnees = $req->fetch()){
                  
            ?>
            <tr>
                <td> <?php echo ($donnees['ID_alert']); ?> </td>
                <td> <?php echo ($donnees['ID_user'] ); ?> </td>
                <td> <?php echo ($donnees['notif_name']); ?></td>
                <td> <?php echo ($donnees['notif_description']); ?> </td>
                <td> <?php echo ($donnees['notif_lvl']); ?> </td>
                <td> <?php echo ($donnees['notif_date']); ?> </td>
                <td> <?php echo ($donnees['notif_type']); ?> </td>
                <td> <?php echo ($donnees['notif_statut']); ?> </td>         
            </tr>

            <?php }
            ?>
        </table>
        

        <?php include 'footer_v2.1.html';?>

       
	</body>

</html> 