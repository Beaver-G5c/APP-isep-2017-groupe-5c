<?php
function getCatalogue($bdd){
    
    $req = $bdd->query('SELECT * FROM catalogue');
    $dataArray=array('ID_type'=>array(),'product_name'=>array());
    $i=0;
    while($donnees=$req->fetch()){
        $dataArray['ID'][$i]=$donnees['ID'];
        $dataArray['ID_type'][$i]=$donnees['ID_type'];
        $dataArray['product_name'][$i]=$donnees['product_name'];
        
        $i++;
    }
    
    return $dataArray;
    
}


function add_device ($bdd,$id,$room_name,$id_room,$id_sensor,$id_type,$id_install){
    echo ($id);
    $requeteajouter = $bdd->prepare("INSERT INTO capteurs(nomdelasalle,id_salle,id_sensor,type,id_installation) VALUES(:nomdelasalle, :id_salle, :id_sensor, :type, :id_installation) ");
    $requeteajouter->execute(array('nomdelasalle'=>$room_name,'id_salle'=>$id_room, 'id_sensor'=>$id, 'type'=>$id_type, 'id_installation'=>$id_install));
    
}
?>
    
    





?>