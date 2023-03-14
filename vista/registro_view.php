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
  <form method="post" action="">
    <label>Nombre de usuario:</label>
    <input type="text" name="username" require><br><br>
    <label>Contraseña:</label>
    <input type="password" name="password" require><br><br>
    <label>Nombre:</label>
    <input type="text" name="nombre" require><br><br>
    <label>Apellidos:</label>
    <input type="text" name="apellidos" require><br><br>
    <label>Rol:</label>
    <label for="opciones">Selecciona una opción:</label>
      <select id="opciones" name="opciones">
        <option value="Cliente">Cliente</option>
        <option value="Administrador">Administrador</option>
      </select>
      <br><br>
    <input type="submit" name="submit" value="Registrarse"><br><br>
    
  </form>
  <br>
  <p>¿Ya tienes una cuenta? <a href="login_view.php">Inicia sesión aquí</a></p>

  <?php

    if(isset($_POST['submit'])){
      include_once('../modelo/registrar.php');
    }

  ?>
</body>
</html>
