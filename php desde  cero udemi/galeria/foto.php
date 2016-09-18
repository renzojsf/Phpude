<?php 
require("funciones.php");
$conexion=conectar('ventas','root','');
if (!$conexion) {
	die();
}
$id=(isset($_GET['id'])? $_GET['id']:false);

if (!$id) {

		header('Location:index.php');
	}
$cidfotos=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS  * FROM fotos where imagen=:id");
$cidfotos->execute(array(':id' => $id ));
$fotitos=$cidfotos->fetch();
if (!$fotitos) {
		header('Location:index.php');
}
require('vistas/foto.view.php');
?>