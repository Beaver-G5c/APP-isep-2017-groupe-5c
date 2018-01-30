<?php
$bdd = new PDO('mysql:host=localhost;dbname=g5c;charset=utf8', 'root', 'root');

$requete4 = $bdd->query('SELECT * FROM temperature_sensor_last_30days');
include ('../jpGraph/src/jpgraph.php');
include ('../jpGraph/src/jpgraph_line.php');



while($resultatmodif = $requete4 -> fetch() ){
    
    
    $array[]=$resultatmodif['value'];  }
    
    $graph = new Graph(650,200);
    $graph->SetScale('linlin');
    
    $courbe = new LinePlot($array);
    $graph->Add($courbe);
    $graph->Stroke();	
