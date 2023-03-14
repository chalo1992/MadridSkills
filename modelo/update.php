<?php

$host="localhost";
$user="root";
$pass="";
$bd="tienda";
    
$con=mysqli_connect($host,$user,$pass);
    
mysqli_select_db($con,$bd);

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$unidades_stock=$_POST['unidades_stock'];

$sql="UPDATE productos SET  nombre='$nombre',precio='$precio', categoria='$categoria', unidades_stock='$unidades_stock' WHERE id='$id'";
$query=mysqli_query($con,$sql);



    if($query){
        Header("Location: administradores.php");
    }
?>