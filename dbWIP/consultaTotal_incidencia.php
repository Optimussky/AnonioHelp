<!--Ejemplo aprenderaprogramar.com-->
<?php
include '../testdbconnection.php';


// Funciones
function obtenerTotalActivos($totalActivos){
	if($totalActivos != NULL){
		return $totalActivos;
	}

}


function obtenerTotalFaltistas($totalFaltistas){
	if($totalFaltistas !=NULL){
		return $totalFaltistas;
	}

}


function obtenerTotalCurso($totalCurso){
	if($totalCurso !=NULL){
		return $totalCurso;
	}



// Querys

// Total de elementos por el T1
function qryTotalActivosT1(){

	function mostrarFecha(){
	
		$fechaAtual = date("Y-m-d");
		return $fechaAtual;
	
	}
	
	$fecha = mostrarFecha();
	$tableFatiga = "tbFatiga";

	$result = mysql_query("SELECT COUNT(*) from tbFatiga WHERE fechaEntrada LIKE '$fecha%' AND idEstatus=1 AND idTurno=1;");

	$totalActivos= mysql_fetch_array($result);
	//echo var_dump($total);
	
	return $totalActivos;	
	mysql_close();

}



// Total de elementos por el T2
function qryTotalElementosT2(){

	function mostrarFechaT2(){
	
		$fechaAtual = date("Y-m-d");
		return $fechaAtual;
	
	}
	
	$fecha = mostrarFechaT2();
	$tableFatiga = "tbFatiga";

	$result = mysql_query("SELECT COUNT(*) from $tableFatiga WHERE fechaInicio LIKE '$fecha%' AND idTurno=2;");
	$total= mysql_fetch_array($result);
	//echo var_dump($total);
	
	return $total;	
	mysql_close();

}

// Total de elementos por el T3
function qryTotalElementosT3(){

	function mostrarFechaT3(){
	
		$fechaAtual = date("Y-m-d");
		return $fechaAtual;
	
	}
	
	$fecha = mostrarFechaT3();
	$tableFatiga = "tbFatiga";

	$result = mysql_query("SELECT COUNT(*) from $tableFatiga WHERE fechaInicio LIKE '$fecha%' AND idTurno=3;");
	$total= mysql_fetch_array($result);
	//echo var_dump($total);
	
	return $total;	
	mysql_close();

}


// Total de usuarios
function qryTotalUsuarios(){
	$tableUsuario = "tbUsuario";
	$result = mysql_query("SELECT COUNT(*) from $tableUsuario;");
	$totalUsuarios= mysql_fetch_array($result);
	//echo var_dump($total);
	
	return $totalUsuarios;	
	mysql_close();

}

//
function qryTotalActivos(){
	$tableFatiga = "tbFatiga";
	$result = mysql_query("SELECT COUNT(*) from $tableFatiga;");
	$totalActivos= mysql_fetch_array($result);
	//echo var_dump($total);
	
	return $totalActivos;	
	mysql_close();

}


function qryTotalFaltistas(){
	$tableFatiga = "tbFatiga";
	$result = mysql_query("SELECT COUNT(*) from $tableFatiga;");
	$totalFaltistas= mysql_fetch_array($result);
	//echo var_dump($total);
	
	return $totalFaltistas;	
	mysql_close();

}


function qryTotalCurso(){
	$tableFatiga = "tbFatiga";
	$result = mysql_query("SELECT COUNT(*) from $tableFatiga;");
	$totalCurso= mysql_fetch_array($result);
	//echo var_dump($total);
	
	return $totalCurso;	
	mysql_close();

}




/*
// Consulta Total Usuarios
$totalUsuarios = qryTotalUsuarios();
$imprimeUsuarios = obtenerTotalUsuarios($totalUsuarios);
//echo var_dump($imprimeSector[0]);
*/

}
?>
