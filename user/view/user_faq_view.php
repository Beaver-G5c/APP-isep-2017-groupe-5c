<div class="conteneur_faq">

		<h1 class="titre_faq">Vos Questions</h1>
	
	<div class="message_faq">
		<?php 
	    $reponse = $bdd->query('SELECT * FROM faq');
        while ($donnees = $reponse ->fetch())
            {?>	
	
				<p>
					
                    
                    <?php if ($donnees['category']==1){?>
                    <em>Catégorie</em> : Mon profil <br>
                    <?php }else{ ?>
                    <em>Catégorie</em> : Ma maison <br>
                    <?php } ?>
					<em>Question</em> : <?php echo $donnees ['question'];?> <br>
					<em>Réponse</em> : <?php echo $donnees ['answer'];?> <br>
				</p>
	   	<?php }?>		
	</div>	
	</div>	