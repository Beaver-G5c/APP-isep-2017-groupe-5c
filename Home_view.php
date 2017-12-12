<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Home.css">
        <title>New_home</title>

        <?php include 'header-v2.2.html';?>
    </head>

    <body background='wallpaper.png'>


        <form method="post" action="Home_model.php">

        <div class="formulaire">    
    	<p>
    		<label for="adress">Adresse</label>: <input type="text" name="adress" id="adress"/> <br/>
            <label for="postal_code">Code postal</label>: <input type="text" name="postal_code" id="postal_code"/> <br/>
            <label for="town">Ville</label>: <input type="text" name="town" id="town"/> <br/>
    		<label for="password">Mot de passe</label>: <input type="text" name="password" id="password"/> <br/>
    		<label for="state">Etat:</label>
            <select name ="state" id="state">
                <option value="activated" selected>Activer</option>
                <option value="desactivated" selected>Désactiver</option>
            </select> 

    		<input type="submit" name="submit" value="Paramétrer"> 
           
    	</p>
        </div>
        </form>


    <div class="footer">
        <?php include 'footer_v2.1.html';?>
    </div>
       
	</body>

</html>	
