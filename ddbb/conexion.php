<?php

    class Conectar{
        //Creo un método estático conectar: solo necesitaré el nombre de la clase para llamar al método después
        public static function conexion(){
            try{
                //Usamos librería PDO
                $conexion=new PDO('mysql:host=localhost; dbname=tienda', 'root','');
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion->exec("SET CHARACTER SET UTF8");
            }catch(Exception $e){
                die("Error" . $e->getMessage());
                echo "Línea del error" . $e->getLine();
            }
            //Este método nos debe devolver la conexión almacenada en la variable $conexion
            return $conexion;
        }
    }

?>