<?php
function selectCategories($data){
    // cette fonction sert a la selection de la catÈgorie dans le addForm
    // elle prend en arguement le tableau contenant la table de tous les types et de leurs ID
?>
	<select name ="category"   >
    
    	<?php for ($i=0;$i<count($data['id_category']);$i++){?>
   				<option value ="<?php echo ($data['id_category'][$i]);?>"><?php echo ($data['category_name'][$i]);?></option>
    	<?php }?>
	</select>
	
    
<?php }?>
<?php function addForm ($data){
    // ce formulaire sert a ajouter une FAQ
	?>
<!-- On cr√©√© un formulaire qui afin de rentrer les informations -->
		<div class="formulaire_faq_admin">
			<form method="POST" action="">
				<p>
					<label for="catgory"><b>Cat√©gorie : </b></label>			
					<?php selectCategories($data); ?></br>
					<label for="question"><b>Question</b> </label>:<input type="text" name="question" id="question"/></br>
					<label for="answer"><b>R√©ponse </b></label>:<input type="text" name="answer" id="answer"/></br>
					<input type="submit" name="submit" value="Ajouter">
            			
				</p>			
			
			</form>
		</div>
		<?php }?>
		
		<?php 
function displayTable ($donnees){
//cette fonction prend en argument la table de toutes les questions et rÈponses et le affiche dans un tableau?>

		<div class="tableau_faq_admin">
		
 

        <table>
        <tr>
        		<th>Cl√©</th>
        		<th>Cat√©gorie</th>
        		<th>Question</th>
        		<th>R√©ponse</th>
        </tr>   
          
 
        <?php 
        
        for ($i=0;$i<count($donnees['id_faq']);$i++){
            // le nombre de lignes affichÈes dÈpend du nombre de lignes du tableau
        
            
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
    // ce formulaire sert lors de la modification d'une FAQ
    // il prend en argument les donnÈes de la FAQ dont on parle, ainsi que la liste de toutes les catÈgories existant
    // cela permet dans le select du type de FAQ de mettre en selected le type de la FAQ enregistrÈ 
    
    
	?>

<!-- On retrouve le m√™me formulaire afin de modifier nos valeurs -->		
		<form method="POST" action="">
			<div class="formulaire_faq_admin">
				<p>
					<label for="catgory"><b>CatÈgorie : </b></label>			
					<?php selectCategoriesWithTest($donnees,$categories_list); ?></br>
					<label for="question"><b>Question</b> </label>:<input value ="<?php echo ($donnees['question']);?>"type="text" name="question" id="question"/><br>
					<label for="answer"><b>RÈponse </b></label>:<input value ="<?php echo ($donnees['answer']);?>" type="text" name="answer" id="answer"/><br>
					<label><input type="hidden" value="<?php echo ($_POST['id_faq']);?>" name='id_faq'/></label>
					<input type="submit" name="edit2" value="Modifier">
            			
				</p>			
			</div>
		</form>
		
		
		
<?php
}


function selectCategoriesWithTest($data_user,$categories_list){
    // cette fonction echo un select pour proposer les types de FAQ que l'on peut avoir
    //elle fait le test en fonction de ce qui est enregistrÈ dans la base de donnÈes et echo en selected le type dÈja enregistrÈ
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