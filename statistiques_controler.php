<?php

include ("../jpGraph/src/jpgraph.php");

include ("../jpGraph/src/jpgraph_line.php");
require '../connect.php';
require('../model/statistiques_model.php');

if($_POST['tri']=='derniereheure'){
while($resultatmodif = $requete -> fetch() ){
    

    
           $array[]=$resultatmodif['value'];  }
           
$graph = new Graph(650,200);
$graph->SetScale('linlin');
           
$courbe = new LinePlot($array);
$graph->Add($courbe);
$graph->Stroke();	}

if($_POST['tri']=='dernierejournee'){
    while($resultatmodif = $requete2 -> fetch() ){
$array[]=$resultatmodif['value'];  }
$graph = new Graph(650,200);
$graph->SetScale('linlin');
$courbe = new LinePlot($array);
$graph->Add($courbe);
$graph->Stroke();	}

if($_POST['tri']=='semainecomplete'){
while($resultatmodif = $requete3 -> fetch() ){
$array[]=$resultatmodif['value'];  }
$graph = new Graph(650,200);
$graph->SetScale('linlin');
$courbe = new LinePlot($array);
$graph->Add($courbe);
$graph->Stroke();	
?><input type="submit">


<?php }

if($_POST['tri']=='moiscomplet'){
    while($resultatmodif = $requete4 -> fetch() ){
        $array[]=$resultatmodif['value'];  }
        $graph = new Graph(650,200);
        $graph->SetScale('linlin');
        $courbe = new LinePlot($array);
        $graph->Add($courbe);
        $graph->Stroke();	}
























require('../view/statistiques_view.php');
?>