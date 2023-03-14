<?php
        $host="localhost";
        $user="root";
        $pass="";
        $bd="tienda";
    
        $con=mysqli_connect($host,$user,$pass);
    
        mysqli_select_db($con,$bd);


$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$unidades_stock=$_POST['unidades_stock'];


 if(empty(trim($nombre))){
    echo "Por favor introduce un DNI.<br>";
}
 if(empty(trim($precio))){
    echo "Por favor introduce un nombre.<br>";
 }
 if(empty(trim($categoria))){
    echo "Por favor introduce los apellidos.<br>";
 }
 if(empty(trim($unidades_stock))){
    echo "Por favor introduce los apellidos.<br>";
 }



    

    $sql="INSERT INTO productos VALUES('$id','$nombre','$precio','$categoria','$unidades_stock')";
    $query= mysqli_query($con,$sql);


if($query){
    Header("Location: administradores.php");
    
}

?>