<?php 
$nohay='';
try {
	$cone=new PDO('mysql:host=localhost;dbname=ventas','root','');

} catch (PDOException $e) {
	echo 'Error:'. $e->getMessage();
	die();
}
//saber la pagina
//si la variable existe entonces obten el valor entero
if (isset($_GET['pagina'])) {
	$pagina= (int)$_GET['pagina'];
}else{
	$pagina=1;
}
$proxpage=3;//CANTIDAD POR PAGINA
//Inicia en
$inicio=($pagina>1)? ($pagina * $proxpage- $proxpage ):0;
//						3    *  1  - 3 ==0-->1
//						2    *   3 -3 ==3-->4
//						3    *   3 - 3 =6-->6
$cproductos=$cone->prepare("SELECT SQL_CALC_FOUND_ROWS  * FROM Productos LIMIT $inicio,$proxpage");
$cproductos->execute();
$cproductos = $cproductos->fetchAll();//trae todos los arcticulos del virtual a la variable
if (!$cproductos) {
	header('location:paginaa.php');
}
$total=$cone->query('SELECT FOUND_ROWS() AS TOTAL');//ejecuta
$total=$total->fetch()['TOTAL'];//guarda el total
$numeropaginas =ceil($total/$proxpage);
//						10/  3 ==3.33 ==4 paginas redoncea superior
require('paginavista.php');
?>