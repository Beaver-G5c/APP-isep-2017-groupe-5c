 

        <!-- Formulaire d'ajout d'une notification Ã  la DB -->



<?php function addForm($list){?>

	<h1 class = titre> Ajouter une alerte :</h1>
		<div class = zone><br/>
			<form method='POST' action='' class = form_notif>
					<label>Nom : <br/><input type='text' name='name' class='formulaire' placeholder='Ex:Erreur 404 ' required /> </label><br/>
					<label>Description : <br><input type='text' name='description' class='formulaire' placeholder='Ex: Capteur en panne ' required /> </label><br/>
					<label>Niveau d'alerte /10 : <br/><input type='number' name='lvl_alert' class='formulaire' placeholder=' Ex: 3' required/></label><br/>
					<label>ID de l'user concerne : <br/><input type='number' name='id_user_target' class='formulaire' placeholder=' Ex: 15' required/></label><br/>
					<?php selectCategoriesAlert($list);?><br/>
					
					<input type="submit" name="submit" value="Ajouter"/>
			</form>
</div>


<?php }?>


<?php function displayTable($donnees){?>
        <!-- Tableau affichant la totalitÃ© des donnÃ©es de la DB par ordre croissant de leur ID_notif. -->
        <table class = table_notif>
            <tr>
                <th> ID alerte</th>
                <th> ID user</th>
                <th> Nom </th>
                <th> Description</th>
                <th> Niveau d'\alerte</th>
                <th> Date </th>
                <th> Type d'alerte</th>
                <th> Statut </th>
                <th> Modifier </th>
                <th> Supprimer</th>
            </tr>
            
           

            <?php
               
                for ($i=0;$i<count($donnees['ID_notif']);$i++)  {                
            ?>
            <tr>
                <td> <?php echo ($donnees['ID_notif'][$i]); ?> </td>
                <td> <?php echo ($donnees['ID_user'][$i] ); ?> </td>
                <td> <?php echo ($donnees['notif_name'][$i]); ?> </td>
                <td> <?php echo ($donnees['notif_description'][$i]); ?> </td>
                <td> <?php echo ($donnees['notif_lvl'][$i]); ?> </td>
                <td> <?php echo ($donnees['notif_date'][$i]); ?> </td>
                <td> <?php echo ($donnees['notif_type'][$i]); ?> </td>
                <td> <?php echo ($donnees['notif_statut'][$i]); ?> </td>
                <td>
                
                <form method = 'POST' action="">
                	<input type="hidden" value="<?php echo($donnees['ID_notif'][$i]);?>" name="ID_alert" class = "formulaire" />
                 	<input type="submit" name="submit_modif" value="Modifer"/>
                </td>
                <td>
                <!-- On utilise un formulaire pour supprimer la notification en envoyant la valeur de l'Id_notif via un POST. -->
                
                    <input type="hidden" value="<?php echo($donnees['ID_notif'][$i]);?>" name="ID_alert" class = "formulaire" />
                    <input type="submit" name="submit3" value="Delete"/>
                </form></td>
               

            </tr>

            <?php }
            ?>
        </table>
        

<?php } ?>


<?php
 function modifForm($data,$list){ ?>
	  <h1 class = titre> Modifier une alerte :</h1>
        	<div class = zone>
        		<br>
	            <form method='POST' action='' class = form_notif>
	            	<label><br><input type='hidden' name='alert_id' class='formulaire' value= "<?php echo ($data['ID_notif'])?>" /></label><br>
	                <label>Nom : <br><input type='text' name='alert_name' class='formulaire' value="<?php echo($data['notif_name'])?>"  /> </label><br>
	                <label for="description">Description : <br></label><textarea name="description" class = 'formulaire'> <?php echo($data['notif_description'])?> </textarea><br>
	                <label>Niveau d'alerte /10 : <br><input type='number' name='alert_lvl' class='formulaire' value="<?php echo($data['notif_lvl'])?>" /></label><br>
	                <label>ID de l'user concerne : <br><input type='number' name='user_id' class='formulaire' value="<?php echo($data['ID_user'])?>" /></label><br>
	               <?php selectCategoriesWithTest($data,$list); ?><br/>
	                <label>Etat de l'alerte :</label><br/>
	                	<select name ="alert_state"   >
							<option value ="Non Traitée" selected >Non Traitée</option>
							<option value ="Prise en charge">Prise en charge</option>
							<option value ="Traitée">Traitée</option>
    					</select>
    					
    				<input type="submit" name="submit2" value="Ajouter"/>
    				
	             

 <?php }?>
 
 <?php 
 function selectCategoriesAlert($data){
?>
	<label>Type</label>
	<select name ="category"   >
    
    	<?php for ($i=0;$i<count($data['id_alert_type']);$i++){?>
   				<option value ="<?php echo ($data['id_alert_type'][$i]);?>"><?php echo ($data['name_alert_type'][$i]);?></option>
    	<?php }?>
	</select>
	
    
<?php }


function selectCategoriesWithTest($data_user,$categories_list){?>

	<label>Type</label>
	<select name ="category"   >
    
    	<?php for ($i=0;$i<count(categories_list['id_alert_type']);$i++){
    	
    			 if ($categories_list['name_alert_type'][$i]==$data_user['notif_name']){ ?>
    				<option value ="<?php echo ($categories_list['id_alert_type'][$i]);?>" selected ><?php echo ($categories_list['name_alert_type'][$i]);?></option>
    			<?php }?>
    			
    			
    			<?php if ($categories_list['name_alert_type'][$i]!=$data_user['notif_name']){?>
    				<option value ="<?php echo ($categories_list['id_alert_type'][$i]);?>"  ><?php echo ($categories_list['name_alert_type'][$i]);?></option>
    			<?php }?>
    			
    	<?php }?>
	</select>
	
    
<?php }?>
