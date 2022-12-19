<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="pdo">
        <h2>Modificar Producto</h2>
        <?php
         include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\base_datos.php');
         include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\Productos.php');
         include('C:\wamp\www\phpavanzado\constantesbd.php');

         $base = new Basededatos(SERVIDOR, USUARIO, CLAVE, BASE);
         $prod = new Productos($base);
     
         $modificar_prod ->seleccionarProducto($_GET['id']);
         header("Location: index.php");
        ?>
        <?php
            include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\base_datos.php');
            include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\Productos.php');
            include('C:\wamp\www\phpavanzado\constantesbd.php');

            $base = new Basededatos(SERVIDOR, USUARIO, CLAVE, BASE);
            $prod = new Productos($base);

            $modificar_prod=$prod->seleccionaProducto($_GET['id'])
        
        ?>
        <form action="modificar_tabla.php" method="post">
				<input type="hidden" placeholder="Codigo" name="codigo" value="<?php echo $modificar_prod[0]['codigo']; ?>">
                <input type="text" placeholder="Producto" name="producto" value="<?php echo $modificar_prod[0]['producto']; ?>>
				<input type="text" placeholder="Precio" name="precio" value="<?php echo $modificar_prod[0]['precio']; ?>>
				<select name="categoria" class="select_estilo">
					<option value="autocebante">Autocebante</option>
					<option value="horizontal">Horizontal</option>
					<option value="inatascable">Inatascable</option>
				</select>
				<input type="submit" value="Modificar Producto">
			</form>
    </section>
</body>
</html>

    