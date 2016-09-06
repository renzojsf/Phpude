<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Este es el vista login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> " method='POST' name='login'>
	<input type="text" name="usu">
	<input type="text" name="pass">

	<button type="boton" onclick="login.submit()">Login</button>
</form>
<?php 

?>
<a href="registrate.php">Registrate</a>
</body>
</html>