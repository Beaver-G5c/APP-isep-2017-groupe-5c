<h1>Historique de vos alertes / notifications : </h1>
        <!-- Tableau affichant la totalité des données de la DB par ordre croissant de leur ID_notif. -->
        <table class = table_notif>
            <tr>
                <th> ID alerte</th>
                <th> Nom </th>
                <th> Description</th>
                <th> Niveau d'alerte</th>
                <th> Date </th>
                <th> Type d'alerte</th>
                <th> Statut </th>
            </tr>

        <?php 
        $_user_id=$_SESSION['ID_user'];
            $request =$bdd->query("SELECT * FROM notification WHERE (ID_user='$_user_id' OR ID_user=0 ) ORDER BY notif_date DESC ");
            while ($donnees = $request->fetch()){
                ?>      
            <tr>
                <td> <?php echo ($donnees['ID_notif']); ?> </td>
                <td> <?php echo ($donnees['notif_name']); ?> </td>
                <td> <?php echo ($donnees['notif_description']); ?> </td>
                <td> <?php echo ($donnees['notif_lvl']); ?> </td>
                <td> <?php echo ($donnees['notif_date']); ?> </td>
                <td> <?php echo ($donnees['notif_type']); ?> </td>
                <td> <?php echo ($donnees['notif_statut']); ?> </td>
            </tr>
                    
            <?php }
            ?>
</table>