<!DOCTYPE html>
<html lang="es">
<?php session_start() ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="carritodecompras/estiloform.css">
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
			<?php include('conexion.php') ?>
			<?php /* desarrollo del formulario para cargar productos */ ?>
			<h2>Cargar Productos</h2>
			<div>
			<form action="carritodecompras/altaProd.php" method="post">
				<label for="producto">Producto</label>
				<input type="text" placeholder="Producto" name="producto">
				<select name="categoria">
					<option value="Autocebantes">Autocebantes</option>
					<option value="Horizontales">Horizontales</option>
					<option value="Inatascables">Inatascables</option>
				</select>
				<label for="precio">Precio</label>
				<input type="text" placeholder="Precio" name="precio">
				<input type="submit" value="Cargar Producto">
			</form>
			</div>
			<?php if (isset($_GET['ok'])) {
				echo "<h4>Producto cargado exitosamente</h4>";
			} ?>
			
				<h3>Lista de Productos</h3>
				<?php
				include('carritodecompras/clasesunidad7/base_datos.php');
				include('carritodecompras/clasesunidad7/Productos.php');
				include('carritodecompras/constantes.php');

				$base = new Basededatos(SERVIDOR, USUARIO, CLAVE, BASE);
				$prod = new Productos($base);

				$mostrar_prod = $prod->seleccionarProducto();
				?>
			<table>
				<tr>
					<th>Código</th>
					<th>Producto</th>
					<th>Categoría</th>
					<th>Precio</th>
				</tr>
				<tr>
					<?php
						for ($i=0; $i=count($mostrar_prod) ; $i++) { ?>
						<tr>
							<td><?php echo $mostrar_prod[$i]['id_prod']; ?></td>
							<td><?php echo $mostrar_prod[$i]['producto_prod']; ?></td>
							<td><?php echo $mostrar_prod[$i]['categoria_prod']; ?></td>
							<td><?php echo $mostrar_prod[$i]['precio_prod']; ?></td>
						</tr>
						<?php }?>
					
					<tr></tr>
				</tr>
			</table>
				
			

			<h2>Compras</h2>

		</section>
		<aside>

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>