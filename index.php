<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>NETFLIX - Inicio de Sesión</title>
    <style>
        body { background: #141414; color: white; font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: rgba(0,0,0,0.75); padding: 60px; border-radius: 4px; width: 350px; text-align: center; }
        h1 { color: #E50914; font-size: 3rem; margin-bottom: 20px; font-weight: bold; }
        input { width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 4px; border: none; background: #333; color: white; box-sizing: border-box; }
        .btn { width: 100%; padding: 12px; background: #E50914; color: white; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; }
        .link { display: block; margin-top: 20px; color: #b3b3b3; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h1>NETFLIX</h1>
        <form action="acciones.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contra" placeholder="Contraseña" required>
            <button type="submit" name="accion" value="inicio" class="btn">Iniciar Sesión</button>
            <a href="registro.php" class="link">¿Nuevo en Netflix? Regístrate ahora.</a>
        </form>
    </div>
</body>
</html>