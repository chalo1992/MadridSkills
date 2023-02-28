<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
</head>
<body>
  <h2>Iniciar sesión</h2>
  <form method="POST">
    <label>Usuario:</label>
    <input type="text" name="username"><br><br>
    <label>Contraseña:</label>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Ingresar"><br><br>
    <span><?php echo $error; ?></span>
  </form>
  <br>
  <p>¿No tienes una cuenta? <a href="registro_view.php">Regístrate aquí</a></p>
</body>
</html>