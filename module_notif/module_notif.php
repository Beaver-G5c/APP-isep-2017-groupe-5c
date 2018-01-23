	<body>
		<h3> Notifications : </h3>
		<?php 
			$_user_id=$_SESSION['id_user'];

			$request =$bdd->query("SELECT * FROM notification WHERE notif_statut!='Finie' AND (ID_user='$_user_id' OR ID_user=0 ) ORDER BY ID_notif DESC ");
		    while ($donnees = $request->fetch()){
		    	
		?>		
		    	<p>
					Nom : <?php echo ($donnees['notif_name']); ?>. Le <?php echo ($donnees['notif_date']); ?> <br>
					Description : <?php echo ($donnees['notif_description']); ?> <br>
					Type : <?php echo ($donnees['notif_type']); ?>. Statut :<?php echo ($donnees['notif_statut']); ?><br>
				</p>

					
		    <?php }
            ?>
	</body>
