<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "tienda";

$con = mysqli_connect($host, $user, $pass);

mysqli_select_db($con, $bd);

$id = $_GET['id'];

// Retrieve the name, price, and category of the selected product
$sql = "SELECT nombre, precio, categoria FROM productos WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Insert the product data into the carrito table
$sql2 = "INSERT INTO carrito (nombre, precio, categoria) VALUES ('$row[nombre]', $row[precio], '$row[categoria]')";
$query = mysqli_query($con, $sql2);


require("../vista/carrito_view.php");

?>
