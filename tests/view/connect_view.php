<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../style/style_connexion.css" />
        <title>page de connexion</title>
    </head>

	<body>

    <?php include("header_deconnecte.php");?>

    <h1>CONNEXION</h1>
    <div class="cadre">
	<form method='POST' action=''>
		<label >Identifiant : <input type='text' name='login' class='identifiant' size='19' placeholder='Ex : Jean28' autofocus required maxlength=255/></label><br>
		<label> Mot de passe : <input type='password' name='password' class='mdp' required maxlength=255/></label><br>
		<input type='submit'  class='connecter' name='submit' value='Se connecter' />
	</form>
	</div>
    <a class="oubli" href="uyg">Mot de passe oublié ?</a>

    <?php include("footer.php");?>
    
    </body>
</html>

	
	
	 