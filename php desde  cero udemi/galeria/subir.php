<?php 
require("funciones.php");
$error='';
$conexion=conectar('ventas','root','');
if (!$conexion) {
	die();
}
if ($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)) {
//print_r( $_FILES);
//foto y tempo name
	$cheack=@getimagesize($_FILES['foto']['tmp_name']);
	//false si no es imagen
	if ($cheack !==false) {
		$destino='suba/';
		$archivo_subido=$destino . $_FILES['foto']['name'];
		//echo $archivo_subido;//fotoselecconada.jpj
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

		$consultapreparada=$conexion->prepare('INSERT INTO fotos (titulo,imagen,texto) VALUES (:titulo,:imagen,:texto)');
		$consultapreparada->execute(array(':titulo' => $_POST['titulo'],
										  ':imagen' => $_FILES['foto']['name'],
										  ':texto' => $_POST['texto']									  
		 ));
		header('Location:index.php');
	}else{
		$error='el archivo no es imagen o es pesado';
	}
}
require('vistas/subir.view.php');
?>