<?php
    include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\base_datos.php');
    include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\Productos.php');
    include('C:\wamp\www\phpavanzado\constantesbd.php');

    $base = new Basededatos(SERVIDOR, USUARIO, CLAVE, BASE);
    $prod = new Productos($base);

    $prod ->actualizaProducto($_POST['codigo'],$_POST['producto'],$_POST['precio'],$_POST['categoria']);
    header("Location: index.php");
?>