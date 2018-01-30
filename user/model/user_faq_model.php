<?php

function getFaqTable($bdd){
	$reponse = $bdd->query('SELECT * FROM faq');
	$dataArray=array('question'=>array(),'answer'=>array());
	$i=0;
    while ($donnees = $reponse ->fetch()){
		$dataArray['question'][$i]=$donnees['question'];
		$dataArray['answer'][$i]=$donnees['answer'];
		$i++;
	}
	return $dataArray;
}
	
?>