<html>
<head><meta charset="utf-8"> 

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->

</head>

<body>
<?php

$hostname = "localhost";
$username = "fatiga";
$password = "F4t1g4";
$databaseName = "dbfatiga";

$dbConnected = @mysql_connect($hostname,$username,$password);
$dbSelected = @mysql_select_db($databaseName,$dbConnected);



$dbSuccess= true;

if ($dbConnected){
	//echo "MYSQL Connected OK<br/></br/>";
	if ($dbSelected){
		//echo "DB Connected OK <br/><br/>";
	}else{
		//echo "DB Connected FAILED";
	
	}
}else{

	echo "MYSQL Connection FAILED<br/><br/>";
	$dbSuccess = false;
}

if ($dbSuccess){
	$tableQry = "tbUsuario";
	$sqlQry = "SELECT nombre,usuario,clave,idNivel from ".$tableQry;

	if(mysql_query($sqlQry)){
		//echo "Successfull Query";
	}else{
		echo "FAILED Query";
	}
}


?>


</body>

</html>