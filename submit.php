<?php
$servername = "localhost:2323";
$username = "root";
$password = "";
$dbname = "formulario";

// Crear conexión
$connection = mysqli_connect($servername, $username, $password);

// Comprobar conexión
if (!$connection) {
  die("Conexión fallida: " . mysqli_connect_error());
}

// Seleccionar base de datos
$db_select = mysqli_select_db($connection, $dbname);

// Obtener datos del formulario
$consola = $_POST['consola'];
$precio = $_POST['precio'];
$juegos = $_POST['juegos'];
$pagar = $_POST['pagar'];
$juego = $_POST['juego'];
$frecuencia = $_POST['frecuencia'];
$beneficios = $_POST['beneficios'];
$adicional = $_POST['adicional'];

$insertar = "INSERT INTO encuesta (consola, precio, juegos, pagar, juego, frecuencia, beneficios, adicional) VALUES ('$consola', '$precio', '$juegos', '$pagar', '$juego', '$frecuencia', '$beneficios', '$adicional')";

// Ejecutar la consulta
$resultado = mysqli_query($connection, $insertar);

if ($resultado) {
  echo "Encuesta enviada correctamente";
} else {
  echo "Error al enviar la encuesta";
}

// Cerrar la conexión
mysqli_close($connection);
?>