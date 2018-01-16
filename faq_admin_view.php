
<!-- On créé un formulaire qui afin de rentrer les informations -->
		<div class="formulaire_faq_admin">
			<form method="POST" action="">
				<p>
					<label for="catgory"><b>Catégorie : </b></label>			
					<select name ="category" id="category">
						<option value="Profil" selected>Mon profil</option>
                  			<option value="Maison" selected>Ma maison</option>
					</select><br>
					<label for="question"><b>Question</b> </label>:<input type="text" name="question" id="question"/><br>
					<label for="answer"><b>Réponse </b></label>:<input type="text" name="answer" id="answer"/><br>
					<input type="submit" name="submit" value="Ajouter">
            			
				</p>			
			
			</form>
		</div>
		
<!-- On créé un tableau  nous permettant d'afficher les valeurs de la base de données -->
		<div class="tableau_faq_admin">
		<?php require('connect.php');
 $reponse = $bdd->query('SELECT * FROM faq'); ?>

        <table>
        <tr>
        		<th>Clé</th>
        		<th>Catégorie</th>
        		<th>Question</th>
        		<th>Réponse</th>
        </tr>   
          
 <!-- On cherche dans notre base de données -->      
        <?php while ($donnees = $reponse->fetch()) 
            {?>

         <tr>
         	<td><?php echo ($donnees['id_faq']); ?></td>
         	<td><?php echo($donnees['category']); ?></td>
         	<td><?php echo($donnees['question']); ?></td>
         	<td><?php echo($donnees['answer']); ?></td>
         	<td><form method="POST" action="">
         	<label><input type="hidden" value="<?php echo ($donnees['id_faq']);?>" name='id_faq'/></label>
         	<input type='submit' name='delete' class='supprimer' value='Supprimer'/>
         		</form>
            </td>
         	<td><form method="POST" action="faq_admin_view2.php">
         	<label><input type="hidden" value="<?php echo ($donnees['id_faq']);?>" name='id_faq'/></label>
         	<input type="submit" name="edit" class="modifier" value="Modifier">
         		</form>
         	</td>
         </tr>	
   <?php    }  ?>

        </table>
			</div> 
