<!DOCTYPE html>
<html>
<head>
	<title>Vista REGI</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="contenedor"> 
<h1>logun</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='POST' name='login'>
	<label>Usuario</label>
	<input type="text" name="usuario" placeholder="usu">
	<input type="text" name="password" placeholder="pas">

	<button type="submit" onclick="login.submit()">boton</button>
</form>
<?php 
echo $errores;
?>
	<a href="registre.php">registrate</a>
</div>
</body>
</html>