<div class="conteneur_stats">
		 
		<div class="conteneur2_stats">
			<h1>Nombre d'appels SAV</h1>
			<p class="valeurs_stats"><?php echo (call_sav($bdd));?></p>
		</div>
		
		<div class="conteneur2_stats">
			<h1>Nombre d'administrateurs</h1>
			<p class="valeurs_stats"><?php echo (admin_total_number($bdd));?></p>
			
		</div>
  		
  		<div class="conteneur2_stats">
  			<h1>Nombre de clients</h1>
  			<p class="valeurs_stats"><?php echo (user_total_number($bdd));?></p>
  		</div>
  		
  		<?php /*<div class="table_stats">
  			<h1>Historique des alertes / notifications : </h1>
        <!-- Tableau affichant la totalité des données de la DB par ordre croissant de leur ID_notif. -->
        			<label for="user"><b>ID User</b> </label>:<input type="text" name="num_user" id="num_user"/>
        			<input type="submit" name="submit" value="Valider">
        			*/?>
        			
        			
     <?php function table_notification ($bdd) 
            {?> 
            <div class="tableau_stats_admin">
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
                $_user_id=$_SESSION['id_user'];


            $request =$bdd->query("SELECT * FROM notification WHERE (ID_user='$_user_id' OR ID_user=0 ) ORDER BY notif_date DESC ");
            while ($donnees = $request->fetch())
                         {
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
                    
            			
            			</table>
            <?php }?>
         <?php }?>
  		  </div>
  		</div>
  		
	</div>



