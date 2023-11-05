<?php
include_once("Conexion.php");
$con= conectar();
$CORREO = $_POST['CORREO'];
$USUARIO = $_POST['USUARIO'];
$PASS = $_POST['PASS'];

$validacion = "SELECT PASS FROM usuarios WHERE USUARIO='$USUARIO' AND CORREO = '$CORREO'";
$contrase = mysqli_query($con,$validacion);
if($contrase->num_rows==1){
    $row = $contrase->fetch_assoc();
    $hashed = $row["PASS"];

    if(password_verify($PASS,$hashed)){
        echo "Usuario encontrado";
    }else{
        echo "Usuario no encontrado";
    }
}else{
    echo "No encontrado";
}
mysqli_close($con);

?>