<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section id="register">
		<h2>Registro</h2>
		<form action="codificar.php" method="post">
			email: <br/> <input type="email" name="email"><br/>
			contraseña: <br> <input type="password" name="contraseña"><br/>
			<input type="submit" name="ingresar" value="Ingresar">
		</form>
		<p><?php if(isset($_GET['reg_ok'])){echo "Usuario registrado";} ?></p>
		<h3>Ingresar</h3>
		<form action="verificar.php" method="post">
			email: <br/> <input type="email" name="email"><br/>
			contraseña: <br> <input type="password" name="contraseña"><br/>
			<input type="submit" name="ingresar" value="Ingresar">
		</form>
		<p><?php if(isset($_GET['pass_ok'])){echo "Usuario verificado";} ?></p>
		<p><?php if(isset($_GET['pass_error'])){echo "Datos inválidos";} ?></p>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>