<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="estilo_form.css">
</head>

<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>
		<?php
		function generaCaptcha(){
			$patron = "1234567890abcdefghijklmnopqrstuvwxyz&%$/";
			$clave = '';
			for ($i=0; $i < 8; $i++) { 
				$clave .= $patron[rand(0,39)];
			}
			return $clave;
		}
		$_SESSION['captcha'] = generaCaptcha();
		?>
		<form action="validacion.php" method="post">
			<input type="text" name="nombre" placeholder="Introduzca su nombre" maxlength="30" require>
			<input type="text" name="apellido" placeholder="Introduzca su apellido" maxlength="50" require>
			<input type="text" name="correo" placeholder="Introduzca su correo electrónico" maxlength="100" require>
			<textarea name="consulta" placeholder="¿Cómo podemos ayudarle?" rows="5" require></textarea>
			<img src="imagenCaptcha.php">
			<input type="text" name="codigo" placeholder="Captcha">
			<button id="enviar" name="enviar" type="submit" class="btn">ENVIAR</button>
		</form>
		<?php
		include("enviar_consulta.php");
		$consulta = mysqli_query($conectando_db, "SELECT * FROM consultas");
		while ($listadoConsultas = mysqli_fetch_assoc($consulta)){ ?>
		<div class="cons">
			<p><?php echo $listadoConsultas['nombre']?></p>
			<p><?php echo $listadoConsultas['apellido']?></p>
			<p><?php echo $listadoConsultas['correo']?></p>
			<p><?php echo $listadoConsultas['consulta']?></p>
		</div>
		<?php
		}
		?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>