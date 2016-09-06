<!DOCTYPE html>
<html>
<head>
	<title>Pagina</title>
	<link rel="stylesheet" type="text/css" href="estilos/yo.css">
</head>
<body>
<div class="contenedor">
	<h1>Productos</h1>
	<section class="productos">
		<ul>
			<?php foreach ($cproductos  as $value):?>
				<li> <?php echo  $value['Codigo'].'-' .$value['Nombre']?></li>
			<?php endforeach?>	
		</ul>
	</section>
	<section class="paginacion">
		<ul>
			<?php if ($pagina==1):  ?>
				<li class="disabled">&laquo;</li>
			<?php else :?>	
				<li><a href="?pagina=<?php echo $pagina-1; ?>">&laquo;</a></li>
			<?php endif;?>	
			<?php 
			
				for ($i=1; $i <=$numeropaginas; $i++) { 
					if ($pagina==$i) {
						echo "<li class='Active'><a href='?pagina=$i'>$i</a></li>";		
					}else{
						echo "<li><a href='?pagina=$i'>$i</a></li>";
					}
				}
			?>	

			<?php if ($pagina==$numeropaginas):  ?>
				<li class="disabled">&raquo;</li>
			<?php else :?>	
				<li><a href="?pagina=<?php echo $pagina+1; ?>">&raquo;</a></li>
			<?php endif;?>
		</ul>

	</section>

</div>
</body>
</html>