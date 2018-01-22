<h1>Vos Questions</h1>
	
		<div class="message_faq">
	<?php require('connect.php');
	$reponse = $bdd->query('SELECT * FROM faq');
    while ($donnees = $reponse ->fetch())
            {?>	
	
				<p>
					<em>Catégorie</em> : <?php echo $donnees['category']; ?> <br>
					<em>Question</em> : <?php echo $donnees ['question'];?> <br>
					<em>Réponse</em> : <?php echo $donnees ['answer'];?> <br>
				</p>
	   <?php }?>		
		 </div>	
