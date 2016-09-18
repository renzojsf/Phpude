<!DOCTYPE html>
<html>
<head>
	<title>Vista REGI</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="contenedor"> 
<h1>registrate</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST' name='login'>
	<label>Usuario</label>
	<input type="text" name="usuario" placeholder="usu">
	<input type="text" name="password" placeholder="pas">
	<input type="text" name="password2" placeholder="pas2">
	<button type="submit" onclick="login.submit()">boton</button>
</form>
<?php if(!empty($errores)): ?>
	<div>
		<ul>
			<?php echo $errores ?>
		</ul>
	</div>
<?php endif ;?>
	<a href="login.php">iniciar sesion</a>
</div>
</body>
</html>