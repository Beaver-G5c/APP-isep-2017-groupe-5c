<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	  <link rel="stylesheet" href="faq_admin.css">
	<title>FAQ_admin</title>
	
	</head>



	<body background='wallpaper.png'>
	
	<header>
	<?php include ('header-v2.2.html')?>
	</header>
	
		<form method="POST" action="">
			<div class="formulaire_faq_admin">
				<p>
					<label for="catgory">Catégorie : </label>			
					<select name ="category" id="category">
						<option value="profit" selected>Mon profit</option>
                  			<option value="maison" selected>Ma maison</option>
					</select><br>
					<label for="question">Question </label>:<input type="text" name="question" id="question"/><br>
					<label for="answer">Réponse </label>:<input type="text" name="answer" id="answer"/><br>
					<input type="submit" name="submit" value="Ajouter">
				</p>			
			</div>
		</form>
		

		    
		
		    <div class="footer">
        <?php include 'footer_v2.1.html';?>
            </div>
	</body>
	
</html>
