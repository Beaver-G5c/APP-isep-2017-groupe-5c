<?php

function input_securisation($string){
	$string=addcslashes($string,'%,/');
	$string=htmlspecialchars($string);
	$string=htmlentities($string);
	
	
	
	
	return $string;
	
}

?>