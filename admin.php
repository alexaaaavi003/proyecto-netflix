<?php
$conexion = new mysqli("localhost", "root", "", "netflix_db");

if (isset($_GET['eliminar'])) {
    $id_borrar = $_GET['eliminar'];
    $conexion->query("DELETE FROM Usuarios WHERE id_usuario = $id_borrar");
    header("Location: admin.php");    exit();
}

$resultado = $conexion->query("SELECT * FROM Usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrativo - Usuarios</title>
    <style>
        body {
            background-color: #141414;
            color: white;
            font-family: Arial, sans-serif;
            padding: 40px;
            margin: 0;
        }
        h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .btn-crear {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn-crear:hover { background-color: #555; }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #333;
            text-align: left;
        }
        th {
            background-color: #E50914; /* Rojo Netflix */
            font-size: 16px;
        }
        
        /* Botones de acción en la tabla */
        .btn-editar {
            color: white;
            background: #0071eb; /* Azul */
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 10px;
            font-weight: bold;
        }
        .btn-editar:hover { background: #005bb5; }

        .btn-borrar {
            color: white;
            background: #E50914; /* Rojo */
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 3px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        .btn-borrar:hover { background: #b20710; }
    </style>
</head>
<body>
    <h2>Gestión de Usuarios (CRUD)</h2>
    
    <a href="registro.php" class="btn-crear">+ Agregar nuevo usuario</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
        <?php while($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?php echo $fila['id_usuario']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['correo']; ?></td>
            <td><?php echo $fila['rol']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $fila['id_usuario']; ?>" class="btn-editar">Editar</a>
                
                <a href="admin.php?eliminar=<?php echo $fila['id_usuario']; ?>" class="btn-borrar" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario? Esta acción no se puede deshacer.');">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>