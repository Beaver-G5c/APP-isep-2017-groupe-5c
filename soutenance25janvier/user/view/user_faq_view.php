<?php

function displayFaq($data){?>
<h1>Vos Questions</h1>
	
		<div class="message_faq">
	
	
		<?php for ($i=0;$i<count($data['question']);$i++){?>
				<p>
					
					<em>Question</em> : <?php echo $data ['question'][$i];?> <br/>
					<em>Réponse</em> : <?php echo $data ['answer'][$i];?> <br/>
				</p>
		</div> 
	   <?php }
						  
}?>		
