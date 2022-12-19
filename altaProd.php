<?php 
include('clasesunidad7/base_datos.php');
include('clasesunidad7/Productos.php');
include('constantes.php');
/*instanciamos los objetos */
$base = new Basededatos(SERVIDOR,USUARIO,CLAVE,BASE);
$prod = new Productos($base);
/*ejecutamos el método insertar */
$prod->insertarProducto($_POST['producto'],$_POST['precio'],$_POST['categoria']);
header("Location: unidad7.php?ok_prod#cargaprod");

?>