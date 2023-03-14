<?php

require_once "ddbb/conexion.php"; //El MODELO se conecta a la BBDD

class Usuario{

    private $usuario;
    private $clave;
    private $nombre;
    private $apellidos;
    private $codigoEmpleado;
    

    //Creo el constructor 
    public function __construct($row){
        $this->nombre = $row["usuario"];
        $this->clave = $row["clave"];
        $this->nombre = $row["nombre"];
        $this->apellidos = $row["apellidos"];
        $this->codigoEmpleado = $row["codigoEmpleado"];
    }

    public static function getAllUsuarios() {
        $db = Conectar::conexion();
        $data = $db->query("SELECT usuario,clave,nombre,apellidos,codigoEmpleado FROM usuarios");
        $usuarios = array();

        while ( $row = $data->fetch(PDO::FETCH_ASSOC) ) {
            $usuario = new Usuario($row);
            $usuarios[] = $usuario;
        }

        return $usuarios;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getCodigoEmpleado() {
        return $this->codigoEmpleado;
    }


}

?>