<?php

class conexionBd {
    function conectar(){
        $conexion = mysqli_connect("localhost", "root", "12345678" , "bdunad18");
        return $conexion;
    }
    
    function desconectar($conexion){
        mysqli_close($conexion);
    }
}