<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celectronico = $_POST['correo'];
$codigo = $_POST['codigo'];

if($codigo == $_SESSION['captcha']) {
    echo "El código ingresado es correcto";
} else {
    echo "El código ingresado es incorrecto";
}
?>