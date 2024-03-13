<html>
<head><meta charset="utf-8"> 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

function authenticate() {
    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header('HTTP/1.0 401 Unauthorized');
    echo "You must enter a valid login ID and password to access this resource\n";
    exit;
}
 
if (!isset($_SERVER['PHP_AUTH_USER']) ||
    ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
    authenticate();
} else {
    echo "<p>Welcome: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br />";
    #echo "Old: " . htmlspecialchars($_REQUEST['OldAuth']);
    #echo "<form action='' method='post'>\n";
    #echo "<input type='hidden' name='SeenBefore' value='1' />\n";
    #echo "<input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" />\n";
    #echo "<input type='submit' value='Re Authenticate' />\n";
    #echo "</form></p>\n";

}
include 'testdbconnection.php';
//Ejemplo aprenderaprogramar.com

function mostrarDatos ($resultados) {

    if ($resultados !=NULL) {


        echo "- Nombre: ".$resultados['nombre']."<br/> ";

        echo "- Usuario: ".$resultados['usuario']."<br/>";

        echo "- Clave: ".$resultados['clave']."<br/>";

        echo "- Nivel: ".$resultados['idNivel']."<br/>";

    }
    else{
        echo "<br/>No hay más datos: <br/>".$resultados;
    }

}






#$result = @mysql_query("SELECT nombre,usuario,clave,idNivel from tbUsuario");

echo "<p>$result</p>";
$tableQry = "tbUsuario";
$result = mysql_query("SELECT nombre,usuario,clave,idNivel from $tableQry");
$extraido1= mysql_fetch_array($result);

mostrarDatos($extraido1);

mysql_close();

</body>

</html>