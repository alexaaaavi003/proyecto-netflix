<?php
$conexion = new mysqli("localhost", "root", "", "netflix_db");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = $conexion->query("SELECT * FROM Usuarios WHERE id_usuario = $id");
    $usuario = $resultado->fetch_assoc();
}

if (isset($_POST['actualizar'])) {
    $id_update = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $rol = $_POST['rol'];

    $conexion->query("UPDATE Usuarios SET nombre='$nombre', correo='$correo', rol='$rol' WHERE id_usuario=$id_update");
    
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <style>
        body {
            background-color: #141414;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .contenedor-form {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 50px;
            border-radius: 4px;
            width: 100%;
            max-width: 400px;
        }
        h2 { 
            text-align: center; 
            margin-bottom: 30px; 
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #ccc;
        }
        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background: #333;
            border: none;
            border-radius: 4px;
            color: white;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #0071eb; /* Azul para indicar que es edición */
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 15px;
        }
        button:hover { background-color: #005bb5; }
        
        .btn-cancelar {
            display: block;
            text-align: center;
            background-color: #333;
            color: white;
            padding: 15px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn-cancelar:hover { background-color: #555; }
    </style>
</head>
<body>
    <div class="contenedor-form">
        <h2>Editar Usuario</h2>
        
        <form action="editar.php" method="POST">
            <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">
            
            <label>Nombre Completo:</label>
            <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
            
            <label>Correo Electrónico:</label>
            <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required>
            
            <label>Rol en el sistema:</label>
            <select name="rol">
                <option value="usuario" <?php if($usuario['rol'] == 'usuario') echo 'selected'; ?>>Usuario</option>
                <option value="administrador" <?php if($usuario['rol'] == 'administrador') echo 'selected'; ?>>Administrador</option>
            </select>

            <button type="submit" name="actualizar">Guardar Cambios</button>
            <a href="admin.php" class="btn-cancelar">Cancelar</a>
        </form>
    </div>
</body>
</html>