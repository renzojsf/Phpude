<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Este es el vista registro</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> " method='POST' name='envio'>
	<label>Nombre</label>
	<input type="text" name="USUARIO">
	<input type="text" name="pass">
	<input type="text" name="repitepas">
	<button type="boton" onclick="envio.submit()">Envia formulario</button>
</form>
<?php if(!empty($errores)): ?>
	<div>
		<ul>
			<?php echo $errores ?>
		</ul>
	</div>
<?php endif ;?>	
<a href="login.php">Logea</a>
</body>
</html>