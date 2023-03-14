<?php

$host="localhost";
$user="root";
$pass="";
$bd="tienda";

$con=mysqli_connect($host,$user,$pass);

mysqli_select_db($con,$bd);

$id=$_GET['id'];

$sql="DELETE FROM carrito  WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){

    header("Location: ../vista/carrito_view.php");
}


?>