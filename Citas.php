<?php
include_once("Conexion.php");
$con = conectar();
$sql="SELECT HORARIO FROM horarios";
$query = mysqli_query($con,$sql);
$horarios=[];


?>