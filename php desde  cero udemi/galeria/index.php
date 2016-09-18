<?php 
require("funciones.php");
$fotosxpagin=4;
$paginaactual=(isset($_GET['p'])? (int)$_GET['p']:1);
$inicio=($paginaactual>1)? $paginaactual * $fotosxpagin - $fotosxpagin : 0;
$conexion=conectar('ventas','root','');
if (!$conexion) {
	die();
}
$cfotos=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS  * FROM fotos LIMIT $inicio,$fotosxpagin");
$cfotos->execute();
$fotitos=$cfotos->fetchAll();
/*
if ($fotitos) {
 header('Location:index.php');
}*/
$cfotos=$conexion->prepare('SELECT FOUND_ROWS() AS TOTAL');//ejecuta
$cfotos->execute();
$totalfotos=$cfotos->fetch()['TOTAL'];
$total_paginas=ceil($totalfotos/$fotosxpagin);
require ('vistas/index.view.php');

?>