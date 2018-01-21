<?php
function selectCategories($data){
?>
	<select name ="category"   >
    
    	<?php for ($i=0;$i<count($data);$i++){?>
   				<option value ="<?php echo ($data['id_category'][$i]);?>"><?php echo ($data['category_name'][$i]);?></option>
    	<?php }?>
	</select>
	
    
<?php }?>
<?php function addForm ($data){
	?>
<!-- On créé un formulaire qui afin de rentrer les informations -->
		<div class="formulaire_faq_admin">
			<form method="POST" action="">
				<p>
					<label for="catgory"><b>Catégorie : </b></label>			
					<?php selectCategories($data); ?></br>
					<label for="question"><b>Question</b> </label>:<input type="text" name="question" id="question"/></br>
					<label for="answer"><b>Réponse </b></label>:<input type="text" name="answer" id="answer"/></br>
					<input type="submit" name="submit" value="Ajouter">
            			
				</p>			
			
			</form>
		</div>
		<?php }?>
		
		<?php 
function displayTable ($donnees){?>
<!-- On créé un tableau  nous permettant d'afficher les valeurs de la base de données -->
		<div class="tableau_faq_admin">
		
 

        <table>
        <tr>
        		<th>Clé</th>
        		<th>Catégorie</th>
        		<th>Question</th>
        		<th>Réponse</th>
        </tr>   
          
 <!-- On cherche dans notre base de données -->      
        <?php 
        
        for ($i=0;$i<count($donnees['id_faq']);$i++){
        
            
            ?>

         <tr>
         	<td><?php echo ($donnees['id_faq'][$i]); ?></td>
         	<td><?php echo($donnees['category'][$i]); ?></td>
         	<td><?php echo($donnees['question'][$i]); ?></td>
         	<td><?php echo($donnees['answer'][$i]); ?></td>
         	<td><form method="POST" action="">
         	<label><input type="hidden" value="<?php echo ($donnees['id_faq'][$i]);?>" name='id_faq'/></label>
         	<input type='submit' name='delete' class='supprimer' value='Supprimer'/>
         		</form>
            </td>
         	<td><form method="POST" action="">
         	<label><input type="hidden" value="<?php echo ($donnees['id_faq'][$i]);?>" name='id_faq'/></label>
         	<input type="submit" name="edit" class="modifier" value="Modifier">
         		</form>
         	</td>
         </tr>	
   <?php    }  ?>

        </table>
			</div> 

<?php
}
?>


<?php 

function updateForm($donnees,$categories_list){ 
    
	?>

<!-- On retrouve le même formulaire afin de modifier nos valeurs -->		
		<form method="POST" action="">
			<div class="formulaire_faq_admin">
				<p>
					<label for="catgory"><b>Cat�gorie : </b></label>			
					<?php selectCategoriesWithTest($donnees,$categories_list); ?></br>
					<label for="question"><b>Question</b> </label>:<input value ="<?php echo ($donnees['question']);?>"type="text" name="question" id="question"/><br>
					<label for="answer"><b>R�ponse </b></label>:<input value ="<?php echo ($donnees['answer']);?>" type="text" name="answer" id="answer"/><br>
					<label><input type="hidden" value="<?php echo ($_POST['id_faq']);?>" name='id_faq'/></label>
					<input type="submit" name="edit2" value="Modifier">
            			
				</p>			
			</div>
		</form>
		
		
		
<?php
}


function selectCategoriesWithTest($data_user,$categories_list){
?>
	<select name ="category"   >
    
    	<?php for ($i=0;$i<count($categories_list);$i++){?>
    	
    			<?php if ($categories_list['id_category'][$i]==$data_user['category']){ ?>
    				<option value ="<?php echo ($categories_list['id_category'][$i]);?>" selected ><?php echo ($categories_list['category_name'][$i]);?></option>
    			<?php }?>
    			
    			
    			<?php if ($categories_list['id_category'][$i]!=$data_user['category']){?>
    				<option value ="<?php echo ($categories_list['id_category'][$i]);?>"  ><?php echo ($categories_list['category_name'][$i]);?></option>
    			<?php }?>
    			
    	<?php }?>
	</select>
	
    
<?php }?>