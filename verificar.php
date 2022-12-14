<?php 
include('conexion.php');
$contrasenia=$_POST['contraseña'];
$usuario=$_POST['email'];

$consulta=mysqli_query($conectando_db,"SELECT contraseña FROM user_pass WHERE usuario='$usuario'");
$codificado=mysqli_fetch_assoc($consulta);
$verificar=password_verify($contrasenia,$codificado['contraseña']);

if($verificar){
    header("Location: unidad8.php?pass_ok");
} else {
    header("Location: unidad8.php?pass_error");
}
?>