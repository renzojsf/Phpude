<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<h1>subir view</h1>

	<div class="contenedor">
<form action="" method="post" enctype="multipart/form-data">
			<label for="foto">Foto</label>
			<input type="file" name="foto" id="foto"><br>
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo">
			<label for="texto">descripcion</label><br>

			<textarea id="texto" name="texto"></textarea>
			<?php 
			echo $error;
			?>
			<input type="submit" value="subir">
		</form>

	</div>
</body>
</html>