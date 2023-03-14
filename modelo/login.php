<?php
    session_start();

    $_SESSION = array();
    
    $usuario = htmlentities(addslashes($_POST['username']));
    $password = htmlentities(addslashes($_POST['password']));
    
    $base = new PDO("mysql:host=localhost; dbname=tienda", "root", "");
    
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
    
    $resultado = $base->prepare($sql);
    
    $resultado->execute(array(":usuario" => $usuario));
    
    $registro = $resultado->fetch(PDO::FETCH_ASSOC);
    
    if (password_verify($password, $registro["clave"])) {
        $_SESSION['usuario'] = $_POST['login'];
        
        if ($registro["codigoEmpleado"] == 0) {
            // Si el usuario es un cliente, redirigirlo a la página de clientes
            header("Location: clientes.php");
            exit;
        } else {
            // Si el usuario es un administrador, redirigirlo a la página de administradores
            header("Location: administradores.php");
            exit;
        }
    
    } else {
?>
    <script type="text/javascript">
        alert ('El usuario que has introducido no está registrado');
    </script>
<?php
    }
    
    $resultado->closeCursor();
?>
