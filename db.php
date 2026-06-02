<?php
$servidor = "localhost";
$usuario_db = "root";
$contra_db = "";
$nombre_base_datos = "netflix_db";

$conexion = mysqli_connect($servidor, $usuario_db, $contra_db, $nombre_base_datos);

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>