<?php
include("db.php");

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    if ($accion == "registro") {
        $nom = $_POST['nombre'];
        $cor = $_POST['correo'];
        $usu = $_POST['usuario'];
        $con = $_POST['contra'];

        $sql = "INSERT INTO cuentas (nombre, correo, usuario, contra) VALUES ('$nom', '$cor', '$usu', '$con')";
        
        if (mysqli_query($conexion, $sql)) {
            echo "<script>alert('¡Registro exitoso!'); window.location='index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    }

    if ($accion == "inicio") {
        $usu = $_POST['usuario'];
        $con = $_POST['contra'];

        $consulta = "SELECT * FROM cuentas WHERE usuario='$usu' AND contra='$con'";
        $resultado = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            header("Location: cartelera.php");
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos'); window.history.back();</script>";
        }
    }
}
?>