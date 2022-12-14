<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celectronico = $_POST['correo'];
$consulta = $_POST['consulta'];
$codigo = $_POST['codigo'];

if($codigo == $_SESSION['captcha']) {
    include("conexion.php");
    mysqli_query($conectando_db,"INSERT INTO consultas VALUES (DEFAULT,'$nombre','$apellido','$celectronico','$consulta')");
} else {
    header("Location: unidad5.php?ok");
}
?>