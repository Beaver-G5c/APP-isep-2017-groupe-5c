<?php

empty ($_POST['submit']);
// on vide la variable submit pour etre sur
if (isset($_POST['submit']))
	// si submit est remplie cela veut dire que l'utilisateur a bien rempli toutes les cases et que on peut ajouter la data a la base
    {
		require ('subscribe_model.php');
        add_user($_POST['name'],$_POST['email'],$_POST['password'],$_POST['telephone'],$_POST['secret_question'],$_POST['secret_answer']);
		echo' le compte a été ajouté';
        
        
    }
else
	// sinon on affiche le formulaire a remplir
	{
		require('subscribe_view.php');
		
    }
?>