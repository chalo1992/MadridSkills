<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Registro</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Nombre de usuario:</label>
    <input type="text" name="username"><br><br>
    <label>Contraseña:</label>
    <input type="password" name="password"><br><br>
    <label>Nombre:</label>
    <input type="text" name="nombre"><br><br>
    <label>Apellidos:</label>
    <input type="text" name="apellidos"><br><br>
    <input type="submit" name="submit" value="Registrarse"><br><br>
    <span><?php echo $error; ?></span>
  </form>
  <br>
  <p>¿Ya tienes una cuenta? <a href="login_view.php">Inicia sesión aquí</a></p>
</body>
</html>
