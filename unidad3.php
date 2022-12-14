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
	<section>
		<h2>Comentarios</h2>
		<?php
		$texto = 'Guardaremos los comentarios';
		$file = fopen("comentarios.txt","w");
		fclose($file);
		echo "<p>El archivo se creó con éxito</p>";
		?>
		<form action="comentarios.php" method="post">
			<input type="text" name="nombre"  placeholder="Mi nombre es"  maxlength="30" require>
			<input type="text" name="apellido"  placeholder="Mi apellido es" maxlength="50" require>
			<input type="email" name="correo"  placeholder="Mi correo electrónico es" maxlength="100" require>
			<textarea name="comentario" placeholder="Me gustaría consultar sobre" rows="5" require></textarea>
			<button id="enviar" name="enviar" type="submit" class="btn">ENVIAR</button>	
		</form>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>