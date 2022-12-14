<?php
include('clases/basededatos.php');
include('clases/producto.php');
include('constantesbd.php');

 /* instanciamos los objetos */ 

$base = new Basededatos(SERVIDOR,USUARIO,PASSWORD,BASE);
$prod = new Prod_producto($base);

$prod -> inserta_prod($_POST['codigo'],$_POST['producto'], $_POST['precio'],$_POST['descripcion']);
?>