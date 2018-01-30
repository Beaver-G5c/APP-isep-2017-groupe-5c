<?php



function user_total_number($bdd)
{
    $reponse = $bdd->query("SELECT name FROM users WHERE is_admin = 0");
    $nombre = 0;
    while ($donnees = $reponse->fetch())
    {
        $nombre = $nombre + 1;
    }
    
    return $nombre;
    
    
}

function admin_total_number($bdd)
{
    
    $reponse = $bdd->query("SELECT name FROM users WHERE is_admin = 1");
    $nombre = 0;
    while ($donnees = $reponse->fetch())
    {
        $nombre = $nombre + 1;
    }
    return $nombre;
    
    
}

function call_sav($bdd)
{
   $reponse = $bdd->query("SELECT from_sav FROM notification WHERE from_sav =1");
   $call = 0;
   while ($donnees = $reponse->fetch())
   {
       $call = $call + 1;
   }
   return $call;
   
}


?>