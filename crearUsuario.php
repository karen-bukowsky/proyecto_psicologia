<?php
include_once("Conexion.php");
$con= conectar();
$NOMBRE = $_POST['NOMBRE'];
$APELLIDO_P = $_POST['APELLIDO_P'];
$APELLIDO_M = $_POST['APELLIDO_M'];
$SEXO = $_POST['SEXO'];
$CORREO = $_POST['CORREO'];
$USUARIO = $_POST['USUARIO'];
$PASS = $_POST['PASS'];
$PASS = password_hash($PASS,PASSWORD_DEFAULT);

if(!empty($NOMBRE) && !empty($APELLIDO_P) && !empty($APELLIDO_M) && !empty($SEXO) &&
!empty($CORREO) && !empty($USUARIO) && !empty($PASS)){
    $sql = "INSERT INTO usuarios (NOMBRE, APELLIDO_P, APELLIDO_M, SEXO, CORREO, USUARIO, PASS)VALUES ('".$NOMBRE."','".$APELLIDO_P."','".$APELLIDO_M."','".$SEXO."','".$CORREO."','".$USUARIO."','".$PASS."') ";
    if( mysqli_query($con,$sql)){
        echo "correcto";
        header("location:IniciarSesion.php");
    }else{
        echo "Error al ejecutar la consulta: " . mysqli_error($con);
    }
}
?>