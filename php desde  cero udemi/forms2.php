<?php 
$ero='';
if (isset($_POST['pro'])) {
	
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$enviado=false;
// si no esta basio
	if (!empty($nombre)) {
		$nombre=trim($nombre);//quita espaciados al ini y fin
		$nombre=htmlspecialchars($nombre);//quita html
		$nombre=stripslashes($nombre);// quita las diagonales /
		$nombre=filter_var($nombre,FILTER_SANITIZE_STRING);//remueve signos <>	
		$correo=filter_var($nombre,FILTER_VALIDATE_EMAIL);//VALIDA 
		echo "Ingreso:" .$nombre;
		$enviado=true;
	}else{
		
		$ero.='Falta';	
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/yo.css">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	<input type="text" name="nombre" value="">
	<input type="text" name="correo">
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
		<?php if(!empty($ero)):?>
			<div class="erro">
				<?php 
					echo $ero;
					echo " div";
				?>
			</div>
		<?php endif;  ?>
	<button type="submit" name="pro">consulta</button>	
</form>

</body>
</html>