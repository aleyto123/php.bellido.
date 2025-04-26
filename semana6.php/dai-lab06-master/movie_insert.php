<?php
$conexion = new mysqli("localhost", "root", "", "nombre_de_tu_base_de_datos");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$anio = $_POST['anio'];

$sql = "INSERT INTO peliculas (nombre, genero, anio_estreno) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssi", $nombre, $genero, $anio);
$stmt->execute();

header("Location: index.php");
exit();
?>
