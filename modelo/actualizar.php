<?php 
        $host="localhost";
        $user="root";
        $pass="";
        $bd="tienda";
    
        $con=mysqli_connect($host,$user,$pass);
    
        mysqli_select_db($con,$bd);

$id=$_GET['id'];

$sql="SELECT * FROM productos WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="categoria" placeholder="Categoria" value="<?php echo $row['categoria']  ?>">
                                <input type="text" class="form-control mb-3" name="unidades" placeholder="Unidades en stock" value="<?php echo $row['unidades_stock']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

                    </form>

                    <div class="container mt-5">
            ...
        <a href="login_view.php" class="btn btn-secondary mt-3">Volver al inicio de sesión</a>
        </div>

                    
                </div>
    </body>
</html>