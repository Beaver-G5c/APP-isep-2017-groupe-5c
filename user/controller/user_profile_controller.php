
    

    <div class="carre">
    <h1>Votre profil</h1>
    <?php
    require ("../connect.php");
   
    $req = $bdd->query('SELECT ID_user,name,email,phone_number,account_creation_date,last_connection_date,is_connected,is_admin,admin_authorization,last_cgu_acceptance FROM users ORDER BY account_creation_date DESC LIMIT 0, 1');
       while ($donnees = $req->fetch()){
          
       ?>

        <p><span> Votre ID : </span><?php echo ($donnees['ID_user']); ?></p>
        <p><span> Votre nom : </span><?php echo ($donnees['name'] );?></p>
        <p><span> Votre Email : </span><?php echo ($donnees['email']); ?></p>
        <p><span> Téléphone : </span><?php echo ($donnees['phone_number']); ?></p>
    
        
       
<?php }
?>

<form method="POST" action="controler/modif_profil.php" >
            <input type="submit" value="Modifier le profil" name="submit"/>
        </form>

