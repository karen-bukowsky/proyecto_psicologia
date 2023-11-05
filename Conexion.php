<?php
function conectar(){
    $servidor = "localhost";
    $usuario = "root";
    $contra = "";
    $bd= "psicologia";
    $conexion = new mysqli($servidor,$usuario,$contra,$bd);
    if ($conexion->connect_error) {
        echo "error al conectarse{$conexion->connect_error}";
    }
    return $conexion;
}

?>