<?php
/* Auteur : Teva
Version : 1.0
Date : 08/01
*/
function verification($bdd,$user_name){
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
function verification2($bdd,$secret_answer)
{
    
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
function newmdp($bdd,$mdp,$name)
{
    
    $req = $bdd->prepare('UPDATE users SET password = ? WHERE name = ?');
    $req->execute(array($mdp,$name));
   
   
}
function secret_question($bdd,$nom){
    $reponse = $bdd->query("SELECT * FROM `users` WHERE name ='". $nom."'");
    while ($donnees = $reponse->fetch())
            {
                 echo ($donnees['secret_question']); 
            }
}
            
            
           
            
            
            
?>