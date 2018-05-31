<?php

class conexion {
    function conectar(){
        $conexion = mysqli_connect("localhost", "root", "12345678");
        return $conexion;
    }
    
    function desconectar($conexion){
        mysqli_close($conexion);
    }
}