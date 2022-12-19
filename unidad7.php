<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="estilo_cargaprod.css">
</head>

<body>
	<div class="container">
		<header>
			<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
			<nav>
				<?php include("botonera.php"); ?>
			</nav>
		</header>
		<section id="cargaprod">
			<?php /* desarrollo del formulario para cargar productos */ ?>
			<h2>Cargar Productos</h2>
			<form action="altaProd.php" method="post">
				<input type="text" placeholder="Producto" name="producto">
				<input type="text" placeholder="Precio" name="precio">
				<select name="categoria" class="select_estilo">
					<option value="autocebante">Autocebante</option>
					<option value="horizontal">Horizontal</option>
					<option value="inatascable">Inatascable</option>
				</select>
				<input type="submit" value="Cargar Producto">
			</form>
			<?php if (isset($_GET['ok_prod'])) {
				echo "<h4>Producto cargado exitosamente</h4>";
			}
			?>
			<div class="mostrar_productos_carrito">
				<h2>Mostrar Productos</h2>
				<?php
				include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\base_datos.php');
				include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\Productos.php');
				include('C:\wamp\www\phpavanzado\carritodecompras\clasesunidad7\Carritos.php');
				include('C:\wamp\www\phpavanzado\constantesbd.php');

				$base = new Basededatos(SERVIDOR, USUARIO, CLAVE, BASE);
				$prod = new Productos($base);
				$carritonuevo = new Carrito($base);

				$mostrar_productos = $prod->seleccionarProducto();
				$mostrar_carrito = $carritonuevo->introducirCompra($id_compra);
				?>
				<table>
					<tr>
						<th>Código</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Categoría</th>
					</tr>
						<?php
						for ($i=0; $i<count($mostrar_productos); $i++) {
						?>
					<tr>
						<td><?php echo $mostrar_productos[$i]['codigo'];?></td>
						<td><?php echo $mostrar_productos[$i]['producto'];?></td>
						<td><?php echo $mostrar_productos[$i]['precio'];?></td>
						<td><?php echo $mostrar_productos[$i]['categoria'];?></td>
						<td><a href="modificar_prod.php?id=<?php echo $mostrar_productos[$i]['codigo'];?>">Modificar</a> </td>
						<td><a href="elimina_prod?id=<?php echo $mostrar_productos[$i]['codigo'];?>">Eliminar</a> </td>
					</tr>
					<?php
						}
						?>
				</table>
				<h2>Compras</h2>
					
				
		</section>
		<aside>
		<h3>Carrito de compras:</h3>
		<form action="altaCarrito.php" method="post">
				<input type="text" placeholder="Producto" name="producto">
				<input type="text" placeholder="Precio" name="precio">
				<select name="categoria" class="select_estilo">
					<option value="autocebante">Autocebante</option>
					<option value="horizontal">Horizontal</option>
					<option value="inatascable">Inatascable</option>
				</select>
				<input type="submit" value="Cargar Carrito">
			</form>
			<?php if (isset($_GET['ok'])) {
				echo "<h4>Producto cargado al carrito de compras</h4>";
			}
			?>
			<div class="mostrar_productos_carrito">
			<?php 
			for($i=0; $i<count($mostrar_carrito); $i++) {?>
					<p>Producto:<?php echo $mostrar_carrito[$i]['producto']?></p>
					<p>Precio:<?php echo $mostrar_carrito[$i]['precio']?></p>
					<p>Categoria:<?php echo $mostrar_carrito[$i]['categoria']?></p>
					<a href="modificar_carrito.php?codigo=<?php echo $mostrar_carrito[$i]['id_compra']?>"><button>Eliminar</button></a>
			<?php } ?>	
			</div>
		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>