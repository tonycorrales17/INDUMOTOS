<?php
    function conectar(){
        #Variables de conexion
        $host = "localhost";
        $usuario = "root";
        $password = "rut12345";
        $db="formulario";

        #Variable de conexion estilo procedural
        $conex=@mysqli_connect($host,$usuario,$password,$db) or die ("Conexión fallida ".mysqli_connect_error());
        return $conex;
    }
    function cerrar_conex($conex){
        return mysqli_close($conex);
    }
?>