<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="pro.php" method="post">
	
	<input type="text" name="nombre">
	<label for="hombre">Hombre</label>
	<input type="radio" name="sexo" value="men" id="hombre">
	
	<label for="muje">muje</label>
	<input type="radio" name="sexo" value="mu" id="muje">

	<select name='year'>
		<option value="1">1</option>
		<option value="2">2</option>
	</select>

	<label for="ace">acepta</label>
		<input type="checkbox" name="acepto" id="ace">
	<button type="submit" name="pro">consulta</button>	
</form>

</body>
</html>