<?php 

$host="localhost";
$user="root";
$pass="";
$bd="tienda";

$con=mysqli_connect($host,$user,$pass);

mysqli_select_db($con,$bd);

$sql="SELECT *  FROM carrito";
$query = mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gestión administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>


                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Categoría</th>
                                        <th>Unidades Stock</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['categoria']?></th>   
                                                <th><a href="../modelo/delete_carrito.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
            <div class="container mt-5">
        <a href="../modelo/clientes.php" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </body>
</html>