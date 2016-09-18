<?php
//logica. si tiene sesion sino te manga  a registrar
session_start();
if (isset($_SESSION['usuario'])) {
	require('vista/contenido.view.php'); 
}
/*

if (isset($_SESSION['USUARIO'])) {
	require_once('vista/contenido.view.php'); 
}else{
	header('Location:login.php');
}
*/
?>
