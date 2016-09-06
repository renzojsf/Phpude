<?php 
if (isset($_SESSION['usu'])) {
	header('Location: contenido.php');
	# code...
}else{
	header('Location: registrate.php');
}
?>