    <!-- On affiche le wallpaper directement via le body -->
    <body background='wallpaper.png'>

        <!-- Formulaire d'ajout d'une notification à la DB -->
        <h1 class = titre> Ajouter une alerte :</h1>
            <div class = zone>
                <br>
                <form method='POST' action='' class = form_notif>
                    <label>Nom : <br><input type='text' name='name' class='formulaire' placeholder='Ex:Erreur 404 ' required /> </label><br>
                    <label>Description : <br><input type='text' name='description' class='formulaire' placeholder='Ex: Capteur en panne ' required /> </label><br>
                    <label>Niveau d'alerte /10 : <br><input type='number' name='lvl_alert' class='formulaire' placeholder=' Ex: 3' required/></label><br>
                    <label>ID de l'user concerne : <br><input type='number' name='id_user_target' class='formulaire' placeholder=' Ex: 15' required/></label><br>
                    <label>Type d'alerte : <br><input type='text' name='type_alert' class='formulaire' placeholder='Ex: capteur defectueux' required /> </label><br>
                    <input type="submit" name="submit">
                </form>
                <p class = texte>Si cette alerte est a l'attention de tous les utilisateurs, mettre 0 dans la categorie "ID de l'user concerne" <br></p>
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
            
           <!-- Appel à la base de données notification, ($donnees = $request->fetch()) stocke les données de la prochaine ligne de la DB en 
                commençant par la premiere. Si cette ligne n'existe pas, alors fetch() return False et la boucle while s'arrête.
                On peut ainsi parcourir toute la base de données et afficher son contenu ligne par ligne. -->

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
                <form method = 'POST' action="admin_modif_alert_controler.php">
                	<label><input type="hidden" value="<?php echo($donnees['ID_notif']);?>" name="ID_alert" class = "formulaire" /></label>
                 	<input type="submit" name="submit2" value="Modifer">
                </form></td>
                <td>
                <!-- On utilise un formulaire pour supprimer la notification en envoyant la valeur de l'Id_notif via un POST. -->
                <form method = 'POST' action="admin_modif_alert_controler.php">
                    <label><input type="hidden" value="<?php echo($donnees['ID_notif']);?>" name="ID_alert" class = "formulaire" /></label>
                    <input type="submit" name="submit3" value="Delete">
                </form></td>
               

            </tr>

            <?php }
            ?>
        </table>
        


       
	</body>