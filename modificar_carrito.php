<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar producto</title>
</head>

<body>
    <section id="modifica">
        <h3></h3>
        <?php
        include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\base_datos.php');
        include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\Productos.php');
        include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\Carritos.php');
        include('C:\wamp\www\phpavanzado\constantesbd.php');
        $base = new Basededatos(SERVIDOR, USUARIO, CLAVE, BASE);
        $prod = new Productos($base);
        $carritonuevo = new Carrito($base);

        $modificar_carrito=$carritonuevo->introducirCompra($_GET['id_compra']);
        ?>
        <form action="modificar_tabla.php" method="post">
            <input type="hidden" name="id" value="<?php echo $modificar_prod[0]['codigo'];?>">
            <input type="" placeholder="Producto" name="producto" value="<?php echo $modificar_prod[0]['producto'];?>">
            <input type="text" placeholder="Precio" name="precio" value="<?php echo $modificar_prod[0]['precio'];?>">
            <input type="text" placeholder="Categoría" name="categoria" value="<?php echo $modificar_prod[0]['categoria'];?>">
            <input type="submit" value="Modificar Producto">
        </form>
    </section>
</body>

</html>