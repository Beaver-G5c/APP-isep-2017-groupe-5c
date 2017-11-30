<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>

<?php
echo"hello";

$link = mysqli_connect("localhost", "root", "root", "app");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$reponce = mysql_query("SELECT * FROM "app" ");

echo $reponce ;



  
?>




 














</body>
</html>