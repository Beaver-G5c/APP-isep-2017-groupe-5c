<?php

include ($localisation.'user/jpGraph/src/jpgraph.php');
include ($localisation.'user/jpGraph/src/jpgraph_line.php');

?> <?php
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
require($localisation.'user/view/user_statistiques_view.php');
?>