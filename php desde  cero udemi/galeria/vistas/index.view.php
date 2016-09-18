<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<h1>vista indez</h1>

	<section class="fotos">
		<div class="contenedor">
			<?php foreach($fotitos as $mostralafoto):?>
				<div class="imagen">
					<img src="suba/<?php echo $mostralafoto['imagen']; ?>">
					<a href="suba/<?php echo $mostralafoto['imagen']; ?>">ver</a>
				</div>
			<?php endforeach?>
		</div>
		<div class="paginado">
			<?php if($paginaactual>1): ?>
				<a href="index.php?p=<?php echo $paginaactual-1;?>">anterior</a>
			<?php endif ?>
				<?php if($total_paginas!=$paginaactual): ?>
				<a href="index.php?p=<?php echo $paginaactual+1;?>">adelante</a>
			<?php endif ?>
		</div>
	</section>
</body>
</html>