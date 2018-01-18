<?php 

function updateForm(){ 
	?>

<!-- On retrouve le même formulaire afin de modifier nos valeurs -->		
		<form method="POST" action="faq_admin_controller.php">
			<div class="formulaire_faq_admin">
				<p>
					<label for="catgory"><b>Catégorie : </b></label>			
					<select name ="category" id="category">
						<option value="Profil" selected>Mon Profil</option>
                  		<option value="Maison" selected>Ma Maison</option>
					</select><br>
					<label for="question"><b>Question</b> </label>:<input type="text" name="question" id="question"/><br>
					<label for="answer"><b>Réponse </b></label>:<input type="text" name="answer" id="answer"/><br>
					<label><input type="hidden" value="<?php echo ($_POST['id_faq']);?>" name='id_faq'/></label>
					<input type="submit" name="edit2" value="Modifier">
            			
				</p>			
			</div>
		</form>
		
		
		<div class="footer">
        <?php include 'footer_v2.1.html';?>
         </div>
<?php
}
?>