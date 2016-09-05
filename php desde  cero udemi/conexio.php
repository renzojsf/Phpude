<?php 
$ingreso= $_GET['ingreso'];
try {
	$cone=new PDO('mysql:host=localhost;dbname=ventas','root','');
	$consultapreparada=$cone->prepare('SELECT * FROM productos WHERE Codigo=:ING_COD or Nombre=:ING_NO');
	$consultapreparada->execute(array(':ING_COD' =>$ingreso ,':ING_NO'=>"Camote"));
/*
	$consultapreparada->execute(array(
		':ING_COD' =>$ingreso,
		':ING_NOM' =>$nombre 
	));
*/
//	$resultados=$consultapreparada->fetch();//fetch solo trae 1 resultado
	$resultados=$consultapreparada->fetchAll();//vario
	foreach ($resultados as $mostrar) {
		echo 'El codigo'. $mostrar['Codigo'].' es:' .$mostrar['Nombre'].'<BR>';	
	}
	/*
	echo "<pre>";print_r($resultados);echo "</pre>";*/
} catch (Exception $e) {
	echo "Errpr:". $e->getMessage();
}
?>