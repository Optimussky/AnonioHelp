<html>
<head><meta charset="utf-8"> 


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>LocalQuerys</title>

</head>


<body>

<?//include_once('../testdbconnection.php');?>
<?include_once('index2.php'); ?>
<?include 'consultaTotalElementos.php'; ?>

<?echo "This is Home page"; ?>

<div class="container">
	<br><br>
	<div>
		<div align="center">
			<h1>Conexión a la base de datos local</h1>
			<br><br>
			<? $fechaActual = mostrarFechaActual(); 	?>
			<b> <? echo "FECHA  - ".$fechaActual; 		?> </b>
			<? $horaActual= mostrarHoraActual(); ?>
			<? $minutoActual= mostrarMinutoActual(); ?>
			
			<b> <? echo "<br> HORA - ".$horaActual.":".$minutoActual." horas";	?> </b>
			<b> <?// echo "MINUTO - ".$minutoActual; 		?> </b>
			
			<br><br>
			<div>
				
				<h2>Total Elementos: 
					<? $elementosT1 = qryTotalElementosT1(); ?>
					<? $imprimeTotal = obtenerTotalElementos($elementosT1);?>
					<b><? echo $imprimeTotal[0];?></b>
					Turno: 1 
				</h2>
				<h2>Total Elmentos: 
					<? $elementosT2 = qryTotalElementosT2(); ?>
					<? $imprimeTotal = obtenerTotalElementos($elementosT2);?>
					<? if ($imprimeTotal!= 0){ ?>
					<b><? echo $imprimeTotal[0];?></b>
					<?	}else{ ?>
							<? echo "No hay resultados";?>
					<?	} ?>
					Turno: 2 
				</h2>
				<h2>Total Elmentos: 
					<? $elementosT3 = qryTotalElementosT3(); ?>
					<? $imprimeTotal = obtenerTotalElementos($elementosT3);?>
					<? if ($imprimeTotal!= 0){ ?>
					<b><? echo $imprimeTotal[0];?></b>
					<?	}else{ ?>
							<? echo "No hay resultados";?>
					<?	} ?>
					Turno: 3 
				</h2>
			</div>
			</div>
		</div>
		<br>
		<div>
			
			<? $totalUrs = qryTotalUsuarios(); ?>
			<? $imprimeTotalUsuarios = obtenerTotalUsuarios($totalUrs); ?>
			<?// echo var_dump($imprimeTotalUsuarios[0]);?>
			<p><b>Total de usuarios en la base de datos: <? echo $imprimeTotalUsuarios[0]; ?></b></p>
			
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr >
					<th scope="col">ID-Sector</th>
					<th scope="col">Nombre</th>
				    <th scope="col">Usuario</th>
				    <th scope="col">Clave</th>
				    <th scope="col">Nivel</th>
			    </tr>
			</thead>
			<tbody .table-hover>
			 	<tr>
			 		<?$usuario = qryObtenerUsuario() ?>
			 		<?$resultados = ObtenerUsuario($usuario) ?>
			 		<? 	echo "Here->".print_r($resultados)."<br>"; ?>
			 		<?php 
			 			while($row = $resultados->fetch_assoc()){
			 				echo "ID-Sector: ".$row["idSector"].",Nombre: ".$row["nombre"]."<br>";
			 			}
			 		?>
			 		<? if($resultados->num_rows>0){ ?>
			 		<? 	echo "Here->".$resultados; ?>
			 		<? }else{ ?>
			 		<? 	echo "No se encontraron resultados"; ?>
			 		<? } ?>
			 		<th scope="row"><?echo $resultados[0];  ?></th>
				    <td> <?echo $resultados[1];  ?> </td>
				    <td> <?echo $resultados[2]; ?> </td>
				    <td> <?echo $resultados[3];   ?> </td>
				    <td> <?echo $resultados[4]; ?> </td>
			   </tr>
			</tbody>
		</table>
	</div>
</body>
</html>