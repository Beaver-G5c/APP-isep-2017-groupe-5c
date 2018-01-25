<?php



function getListOfUsers($bdd){
  
    $req = $bdd->query('SELECT ID_user,name,email,phone_number,account_creation_date,last_connection_date,is_connected,is_admin,admin_authorization,last_cgu_acceptance FROM users ORDER BY account_creation_date DESC LIMIT 0, 50');
    $dataArray=array("ID_user"=>array(),"name"=>array(),"email"=>array(),"phone_number"=>array(),"account_creation_date"=>array(),"last_connection_date"=>array(),"is_connected"=>array(),"is_admin"=>array(),"admin_authorization"=>array(),"last_cgu_acceptance"=>array());
    
    $i=0;
    while ($donnees = $req->fetch())
    {
        $dataArray['ID_user'][$i]=$donnees['ID_user'];
        $dataArray['name'][$i]=$donnees['name'];
        $dataArray['email'][$i]=$donnees['email'];
        $dataArray['phone_number'][$i]=$donnees['phone_number'];
        $dataArray['account_creation_date'][$i]=$donnees['account_creation_date'];
        $dataArray['last_connection_date'][$i]=$donnees['last_connection_date'];
        $dataArray['is_connected'][$i]=$donnees['is_connected'];
        $dataArray['is_admin'][$i]=$donnees['is_admin'];
        $dataArray['last_cgu_acceptance'][$i]=$donnees['last_cgu_acceptance'];
        $dataArray['admin_authorization'][$i]=$donnees['admin_authorization'];
        
        $i++;
        
    }
    return $dataArray;
}
