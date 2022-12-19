<?php
    include('carritodecompras/clasesunidad7/base_datos.php');
	include('carritodecompras/clasesunidad7/Productos.php');
	include('carritodecompras/constantes.php');

	$base = new Basededatos(SERVIDOR, USUARIO, CLAVE, BASE);
	$prod = new Productos($base);

	$prod->eliminaProducto($_GET['id']);
	header("Location: index.php#pdo");
