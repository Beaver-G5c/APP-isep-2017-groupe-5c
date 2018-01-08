<?php 
/* Author : Thibpffr
version : 1.3
date : 20/12
*/

?>


      <!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link rel='stylesheet' href='../style/style_subscribe.css' />
        <title>Ajouter un code</title>
    </head>

    <body>
	<?php require("header.php");?>
    <img src='logo2.png' alt='Logo' />
    <h1>Ajouter un numéro</h1>
    <div>
        <form method='POST' action=''>
            <label>Numéro: <input type='text' name='install_number' class='install_number' placeholder='011112 'autofocus required maxlength=256/> </label><br>
            
            <label><input type='submit' name='submit' class='inscription' value='Ajouter'/></label>
    
        </form>
       
    </div>
	
	<table>
		<tr>
			<th> Numéro d'installation </th>
			<th> Id_user</th>
		</tr>
		
		<?php require ($nomDossier.'model/installNumbers-model.php');

		 while ($donnees = $req->fetch()){ 
		 ?>
		<tr>
			<td><?php echo ($donnees['install_number']); ?></td>
			<td><?php echo ($donnees['id_user'] );?></td>
		</tr>
		
		 <?php } ?>
		
	</table>
    </body>
	</html>

