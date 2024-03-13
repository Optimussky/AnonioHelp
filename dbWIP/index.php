<html>
<head><meta charset="utf-8"> 


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>LocalQuerys</title>

</head>


<body>

<?//include_once('../testdbconnection.php');?>
<?include_once('index2.php'); ?>
<?include 'consultaTotalElementos.php'; ?>


<div class="container">
	<br><br>
	<div>
		<div align="center">
			<h1>Conexión a la base de datos local</h1>

			<br><br>

			<? $fechaActual = mostrarFechaActual(); 	?>
			<b> <? echo "FECHA  - ".$fechaActual; 		?> </b>
			<? $horaActual= mostrarHoraActual(); ?>
			<?// $minutoActual= mostrarMinutoActual(); ?>
			
			<b> <? echo "<br> HORA - ".$horaActual.":".mostrarMinutoActual()." horas";	?> </b>
			<b> <?// echo "MINUTO - ".$minutoActual; 		?> </b>
			
			<br><br>

			<div>
				
				<h2>Total Elementos: 
					<? $elementosT1 = qryTotalElementosT1(); ?>
					<? $imprimeTotal = obtenerTotalElementos($elementosT1);?>
					<b><? echo $imprimeTotal[0];?></b>
					Turno: 1 
				</h2>


				<h2>Total Elementos: 
					<? $elementosT2 = qryTotalElementosT2(); ?>
					<? $imprimeTotal = obtenerTotalElementos($elementosT2);?>
					<? if ($imprimeTotal!= 0){ ?>
					<b><? echo $imprimeTotal[0];?></b>
					<?	}else{ ?>
							<? echo "No hay resultados";?>
					<?	} ?>
					Turno: 2 
				</h2>


				<h2>Total Elementos: 
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

			<?// TOTAL DE USUARIOS?>
			<? $totalUrs = qryTotalUsuarios(); ?>
			<? $imprimeTotalUsuarios = obtenerTotalUsuarios($totalUrs); ?>
			<?// echo var_dump($imprimeTotalUsuarios[0]);?>
			<p><b>Total de usuarios en la base de datos: <? echo $imprimeTotalUsuarios[0]; ?></b></p>
			
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr >
					<th scope="col">No.</th>
					<th scope="col">ID-Sector</th>
					<th scope="col">Nombre</th>
				    <th scope="col">Usuario</th>
				    <th scope="col">Clave</th>
				    <th scope="col">Nivel</th>
			    </tr>
			</thead>

			<tbody>
            <?php
            $contador = 1;
			$usuario = qryObtenerUsuario();
			// $row = count($usuario);
			$result = mysql_query("SELECT * from tbUsuario;");
					var_dump($usuario[0]);
					var_dump($usuario[1]);
					var_dump($usuario[2]);
					var_dump($usuario[3]);
					var_dump($usuario[4]);

			while ($fila= mysql_fetch_array($result)) {
            //while ($fila = ObtenerUsuario(qryObtenerUsuario())) {
            ?>
                <tr>
					<td><?php echo $contador; ?></td>
                    <td><?php echo $fila[12]; ?></td>
					<td><?php echo $fila[1]; ?></td>
					<td><?php echo $fila[8]; ?></td>
					<td><?php echo $fila[9]; ?></td>
					<td><?php echo $fila[11]; ?></td>
           
                </tr>
                <?php
					
                	$contador++;
				
			
			}
            
            ?>
        </tbody>

		
		</table>

		<br><br>
		Fin de la partida. GAME OVER!

		<br><br> 

	</div>
</body>
</html>
