<?php 
$nohay='';
try {
	$cone=new PDO('mysql:host=localhost;dbname=ventas','root','');

} catch (Exception $e) {
	echo 'Error:'. $e->getMessage();
	die();
}
//saber la pagina
//$pagina=isset($_GET['pagina'])? (int)$_GET['pagina']:1;
//si la variable existe entonces obten el valor entero
if (isset($_GET['pagina'])) {
	$pagina= (int)$_GET['pagina'];
}else{
	$pagina=1;
}

$proxpage=3;
$inicio=($pagina>1)? ($pagina * $proxpage- $proxpage):0;

$cproductos=$cone->prepare("SELECT SQL_CALC_FOUND_ROWS  * FROM Productos LIMIT $inicio,$proxpage");
//$cproductos=$cone->prepare("SELECT SQL_CALC_FOUND_ROWS  * FROM Productos  WHERE Codigo=9999");

$cproductos->execute();

$cproductos = $cproductos->fetchAll();
/*
if (!$cproductos) {
	$nohay.='no hay producto';
}*/
if (!$cproductos) {
	header('location:paginaa.php');
}
$total=$cone->query('SELECT FOUND_ROWS() AS TOTAL');

$total=$total->fetch()['TOTAL'];
$numeropagina =ceil($total/$proxpage);
require('paginavista.php');
?>