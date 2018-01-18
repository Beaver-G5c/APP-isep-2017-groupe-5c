<?php
/* Auteur : Teva
Version : 1.0
Date : 08/01
*/
require'../Fonctions/connect.php';

function verification($user_name){
require'../Fonctions/connect.php';
$reponse = $bdd->query('SELECT * FROM users');
$douille = 0;
while ($donnees = $reponse->fetch())
{
if ($user_name == $donnees['name'])
{
    $douille = $douille + 1;
}    
}
if ($douille == 1)
{
    return 1;
}
}

function verification2($secret_answer)
{
    require '../Fonctions/connect.php';
    $reponse = $bdd->query('SELECT * FROM users');
$douille = 0;
while ($donnees = $reponse->fetch())
{
if ($secret_answer == $donnees['secret_answer'])
{
    $douille = $douille + 1;
}    
}
if ($douille == 1)
{
    return 1;
}
}

function newmdp($mdp,$name)
{
    require '../Fonctions/connect.php';
    $req = $bdd->prepare('UPDATE users SET password = ? WHERE name = ?');
    $req->execute(array($mdp,$name));
   
   
}
            
            
           
            
            
            


?>