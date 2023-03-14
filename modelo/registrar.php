<?php

$usuario = htmlentities(addslashes($_POST['username']));
$contra = htmlentities(addslashes($_POST['password']));
$nombre = htmlentities(addslashes($_POST['nombre']));
$apellidos = htmlentities(addslashes($_POST['apellidos']));
$rol = htmlentities(addslashes($_POST['opciones']));

// Convertimos el valor de input select en 0 o 1:
$rol = ($rol == "Cliente") ? 0 : 1;

// Encriptamos la contraseña del usuario:
$encriptar_contra = password_hash($contra, PASSWORD_DEFAULT);

try {
    $base = new PDO("mysql:host=localhost;dbname=tienda", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");

    $sql = "INSERT INTO usuarios (usuario, clave, nombre, apellidos, codigoEmpleado) VALUES (:usu, :clave, :nombre, :apellidos, :cod_empleado)";
    $resultado = $base->prepare($sql);

    $resultado->execute(array(":usu" => $usuario, ":clave" => $encriptar_contra, ":nombre" => $nombre, ":apellidos" => $apellidos, ":cod_empleado" => $rol));

    if ($resultado->rowCount() > 0) {
        echo "<h1 style='text-align: center;'>¡Enhorabuena! Se ha registrado con éxito.</h1>";
    } else {
        echo "<h1 style='text-align: center;'>Ha ocurrido un error al registrar el usuario.</h1>";
    }

    $resultado->closeCursor();
} catch (Exception $e) {
    echo "Error en la línea " . $e->getLine() . ": " . $e->getMessage();
} finally {
    $base = null;
}
