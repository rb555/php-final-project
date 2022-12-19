<?php 
include('clasesunidad7/base_datos.php');
include('clasesunidad7/Productos.php');
include('clasesunidad7/Carritos.php');
include('constantes.php');
/*instanciamos los objetos */
$base = new Basededatos(SERVIDOR,USUARIO,CLAVE,BASE);
$prod = new Productos($base);
$carritonuevo = new Carrito($base);
/*ejecutamos el método insertar */
$carritonuevo->introducirCompra($_POST['producto'],$_POST['precio'],$_POST['categoria']);
header("Location: unidad7.php?ok");

?>