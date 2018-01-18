<?php
/* Author : Teva Paquin
version : 1.0
date : 08/01
*/
require ('modele_mdpoublie.php');

empty ($_POST['submit']);
if (isset($_POST['submit']))
    
    {
    $acces = verification ($_POST['reponse']); 
    if ($acces == 1)
    {
        require ('view_mdpoublie_user_secretquestion.php');
    }
    else
    {
        echo $_POST['reponse'];
        echo '</br>';
        echo "ce nom d'utilisateur n'existe pas.";  
    }
    }
else
{
    
    if (isset($_POST['submit2']))
    {
        $acces2 = verification2($_POST['reponse2']);
        if ($acces2 == 1)
        {
            require('view_mdpoublie_user_changementmdp.php');
        }
        else
        {
            echo ('ce n\'est pas la bonne réponse.');
        }
    }
    else 
    {
        if (isset($_POST['submit3']))
        {
            if ($_POST['motdepasse'] == $_POST['motdepasse2'])
            {
                $mdp = (password_hash ($_POST['motdepasse'],PASSWORD_BCRYPT));
                newmdp($mdp,$_POST['reponse']);
                echo 'Votre mot de passe a bien été modifié !';
            }
            else
            {
                echo 'Mots de passes différents.';
                require ('view_mdpoublie_user_changementmdp.php');
            } 
        }
        else 
        {
            require ('view_mdpoublie_user_username.php');
        }
    }
    
}



?>