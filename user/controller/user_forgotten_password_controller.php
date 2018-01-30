<?php


require ($localisation.'user/model/user_forgotten_password_model.php');
empty ($_POST['submit']);
if (isset($_POST['submit']))
    
    {
    $acces = verification ($bdd,$_POST['reponse']); 
    if ($acces == 1)
    {
        require ($localisation.'user/view/user_mdpoublie_user_secretquestion_view.php');
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
        $acces2 = verification2($bdd,$_POST['reponse2']);
        if ($acces2 == 1)
        {
            require ($localisation.'user/view/user_mdpoublie_user_changementmdp_view.php');
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
                newmdp($bdd,$mdp,$_POST['reponse']);
                echo 'Votre mot de passe a bien été modifié !';
            }
            else
            {
                echo 'Mots de passes différents.';
                require ($localisation.'user/view/user_mdpoublie_user_changementmdp_view.php');
            } 
        }
        else 
        {
            require ($localisation.'user/view/user_mdpoublie_user_username_view.php');
        }
    }
    
}
?>