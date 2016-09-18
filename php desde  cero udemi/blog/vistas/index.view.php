<!DOCTYPE html>
<html>
<head>
	<title>index vista Blog</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<script src="https://use.fontawesome.com/3b1212ca1a.js"></script>

<body>
<header>
	<h2>Vista blog index</h2>
	<div class="contenedor">
		<div class="logo izquierda">
			<p><a href="">Primer logo blog</a></p>
		</div>
		<div class="derecha">
			<form action="<?php echo RUTA;?>buscar.php" method='POST' name='busqueda' class='buscar'> 
				<input type="text" name="busquerda">
				<button type="submit">Buscar</button>
			</form>
			<nav class="menu">
				<ul>
					<li><a href="" class="fa fa-twitter">twiter</a></li>
					<li><a href="" class="fa fa-facebook">facebook</a></li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

</body>
</html>