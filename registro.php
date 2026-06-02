<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>NETFLIX - Registro</title>
    <style>
        body { background: #141414; color: white; font-family: Arial; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .reg-box { background: rgba(0,0,0,0.8); padding: 40px; border-radius: 4px; width: 350px; }
        h1 { color: #E50914; text-align: center; margin-bottom: 20px; }
        input { width: 100%; padding: 12px; margin-bottom: 15px; border-radius: 4px; border: none; background: #333; color: white; box-sizing: border-box; }
        .btn { width: 100%; padding: 12px; background: #E50914; color: white; border: none; cursor: pointer; font-weight: bold; }
        .link { display: block; text-align: center; margin-top: 15px; color: #b3b3b3; text-decoration: none; }
    </style>
</head>
<body>
    <div class="reg-box">
        <h1>REGISTRO</h1>
        <form action="acciones.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="correo" placeholder="Correo electrónico" required>
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="contra" placeholder="Contraseña" required>
            <button type="submit" name="accion" value="registro" class="btn">CREAR CUENTA</button>
            <a href="index.php" class="link">Ya tengo cuenta</a>
        </form>
    </div>
</body>
</html>