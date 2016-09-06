<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/yo.css">
</head>
<body>
<h1>Contacto</h1>
<dir>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
		<input type="text" class="form-control" name="nombre" value="<?php if(!$enviado) echo $nombre ;?>" >
		<input type="text" class="form-control" name="correo" value="" >
		
		<textarea id="mensaje" name="mensaje"></textarea>
		<button type="submit" name="envio">Enviar</button>	
	
		
			<?php if(!empty($erro)):?>
					<div class="alert">	
						<?php echo $erro;?>
					</div>
			<?php elseif($enviado): ?>		
					<div class="succes">	
						<p>Enviado correctamente</p>
					</div>	
			<?php endif ?>

	
	</form>
</dir>
</body>
</html>