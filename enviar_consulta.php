<?php
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$correo =$_POST['correo'];
$consulta =$_POST_POST['consulta'];

include("conexion.php");
mysqli_query($conectando_bd,"INSERT INTO consultas VALUES (DEFAULT,'$nombre','$apellido','$correo','$consulta') ");
header ("Location: unidad5.php?ok");
?>