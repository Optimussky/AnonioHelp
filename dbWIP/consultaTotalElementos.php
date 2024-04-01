<!--Ejemplo aprenderaprogramar.com-->
<?php
include '../testdbconnection.php';



function obtenerTotalElementos($total){
	if($total != NULL){
		return $total;
	}

}





function obtenerUsuario($usuario){
	if($usuario !=NULL){
		return $usuario;
	}

}

function obtenerTotalUsuarios($totalUsuarios){
	if($totalUsuarios !=NULL){
		return $totalUsuarios;
	}

}



// Querys

function qryObtenerUsuario(){
	$tableUsuario = "tbUsuario";
	$consulta_usuario = mysql_query("SELECT idSector,nombre,usuario,clave,idNivel from $tableUsuario;");
	$usuario = mysql_fetch_array($consulta_usuario);
	$cuenta = count($usuario);
	//echo "Largo de Array ".$cuenta;
	//echo var_dump($cuenta);
	//echo var_dump($usuario);
	
	return $usuario;
	mysql_close();

}





// Total de elementos por el T1
function qryTotalElementosT1(){

	function mostrarFecha(){
	
		$fechaAtual = date("Y-m-d");
		return $fechaAtual;
	
	}
	
	$fecha = mostrarFecha();
	$tableFatiga = "tbFatiga";

	$consulta_contar_total_t1 = mysql_query("SELECT COUNT(*) from $tableFatiga WHERE fechaInicio LIKE '$fecha%' AND idTurno=1;");
	$total= mysql_fetch_array($consulta_contar_total_t1);
	//echo var_dump($total);
	
	return $total;	
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

	$consulta_contar_total_t2 = mysql_query("SELECT COUNT(*) from $tableFatiga WHERE fechaInicio LIKE '$fecha%' AND idTurno=2;");
	$total= mysql_fetch_array($consulta_contar_total_t2);
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

	$consulta_contar_total_t3 = mysql_query("SELECT COUNT(*) from $tableFatiga WHERE fechaInicio LIKE '$fecha%' AND idTurno=3;");
	$total= mysql_fetch_array($consulta_contar_total_t3);
	//echo var_dump($total);
	
	return $total;	
	mysql_close();

}


// Total de usuarios
function qryTotalUsuarios(){
	$tableUsuario = "tbUsuario";
	$consulta_total_elementos = mysql_query("SELECT COUNT(*) from $tableUsuario;");
	$totalUsuarios= mysql_fetch_array($consulta_total_elementos);
	//echo var_dump($total);
	
	return $totalUsuarios;	
	mysql_close();

}
?>
