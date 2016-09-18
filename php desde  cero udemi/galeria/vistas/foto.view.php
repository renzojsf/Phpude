<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<h1>foto view</h1>

	<div class="contenedor">
		<div class="foto">
		<h1>Foo: <?php if(!empty($cidfotos['titulo'])){
				echo $cidfotos['titulo'];
			}  else{
				echo $cidfotos['imagen'];
			}
			?></h1>

	</div>

	</div>
</body>
</html>