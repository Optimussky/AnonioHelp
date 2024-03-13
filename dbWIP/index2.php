<?php
//include '../testdbconnection.php';

//Ejemplo aprenderaprogramar.com-->

function mostrarFechaActual(){
	
		$fechaAtual = date("Y-m-d");
		return $fechaAtual;
	
}


function mostrarHoraActual(){

	$horaActual = date("H");
	//$minutoActual = date(":i")+1;
	
	return $horaActual;

}

function mostrarMinutoActual(){

	$minutoActual = date("i");
	
	
	return $minutoActual;

}

?>
