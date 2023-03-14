<?php

    //EL controlador neceseita el archivo registro_model
    require_once('modelo/registro_model.php');  
    
    $usuarios=Usuario::getAllUsuarios();

    require_once('vista/login_view.php');

?>