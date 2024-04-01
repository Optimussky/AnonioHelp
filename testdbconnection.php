<html>
<head><meta charset="utf-8"> 

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->

</head>

<body>
<?php


include('configurar.php');
$dbConnected = @mysql_connect($SERVER=DB_SERVER,$USERNAME=DB_USERNAME,$PASSWORD=DB_PASSWORD);
$dbSelected = @mysql_select_db($DB=DB_NAME,$dbConnected);

// Establecer la conexión a la base de datos
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// // Verificar si la conexión es exitosa
// if ($link === false) {
//     die("Error de conexión: " . mysqli_connect_error());
// }else{
// 	$dbSuccess= true;
// 	echo 'Algo';
// }

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

// if ($dbSuccess){
// 	$tableQry = "tbUsuario";
// 	$sqlQry = "SELECT nombre,usuario,clave,idNivel from ".$tableQry;

// 	if(mysql_query($sqlQry)){
// 		//echo "Successfull Query";
// 	}else{
// 		echo "FAILED Query";
// 	}
// }

// mysql_close();
?>


</body>

</html>