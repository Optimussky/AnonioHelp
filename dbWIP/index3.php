<html>
<head><meta charset="utf-8"> 


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>LocalQuerys</title>

</head>


<body>
<?php
// Conexión a la base de datos
// <?include_once('../testdbconnection.php');?>
<?include '../testdbconnection.php';?>

<!-- // Consulta a la base de datos -->
<?$query = "SELECT idUsuario,nombre,usuario,idNivel FROM tbUsuario LIMIT 10";?>
<?$resultado = mysql_query($query);?>

<!-- // Crear la tabla HTML con los resultados -->
<?echo "<table>"?>;
<?echo "<tr><th>ID</th><th>Nombre</th><th>Usuario</th><th>Nivel</th></tr>"?>;

<?while ($fila = mysql_fetch_assoc($resultado)) {?>
    <?echo "<tr>"?>;
    <?echo "<td>" . $fila['idUsuario'] . "</td>";?>
    <?echo "<td>" . $fila['nombre'] . "</td>";?>
    <?echo "<td>" . $fila['usuario'] . "</td>";?>
    <?echo "<td>" . $fila['idNivel'] . "</td>";?>
    <?echo "</tr>";?>
    
<? } ?>

<?echo "</table>";?>

<!-- // Cerrar la conexión -->
<?mysql_close();?>
<!-- ?> -->
</body>
</html>