    <!-- On affiche le wallpaper directement via le body -->
    <body background='wallpaper.png'>


        <!-- Formulaire de modification d'une notification à la DB -->
        <h1 class = titre> Modifier une alerte :</h1>
        	<div class = zone>
        		<br>
	            <form method='POST' action='admin_modif_alert_controler_v4.php' class = form_notif>
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
	            <a href='admin_alert_controler.php?'>Ajouter une alerte</a></p>
            </div>

        <!-- Tableau affichant la totalité des données de la DB par ordre croissant de leur ID_notif. -->
        <table class = table_notif>
            <tr>
                <th> ID alerte</th>
                <th> ID user</th>
                <th> Nom </th>
                <th> Description</th>
                <th> Niveau d'alerte</th>
                <th> Date </th>
                <th> Type d'alerte</th>
                <th> Statut </th>
                <th> Modifier </th>
                <th> Supprimer</th>
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
                <td>
                <!-- On utilise un formulaire pour aller à la page "modification notif" en envoyant la valeur de l'Id_notif via un POST. -->
                <form method = 'POST' action="admin_modif_alert_controler_v4.php">
                    <label><input type="hidden" value="<?php echo($donnees['ID_notif']);?>" name="ID_alert" class = "formulaire" /></label>
                    <input type="submit" name="submit2" value="Modifier">
                </form></td>
                <td>
                <!-- On utilise un formulaire pour supprimer la notification en envoyant la valeur de l'Id_notif via un POST. -->
                <form method = 'POST' action="admin_modif_alert_controler_v4.php">
                    <label><input type="hidden" value="<?php echo($donnees['ID_notif']);?>" name="ID_alert" class = "formulaire" /></label>
                    <input type="submit" name="submit3" value="Delete">
                </form></td>
               

            </tr>

            <?php }
            ?>
        </table>


            
    </body>
