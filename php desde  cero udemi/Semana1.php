<!DOCTYPE html>
<html>
<body>
<P>TIPOS DE DATOS</P>
	<UL>		<LI>Array</LI>	<li>Object</li><li>Clase</li><li>Null</li>
	</UL>
	<?php 
	$no='nop';
	echo 'Es un:, ' ,$no. '<br>';
	echo 'El tipo de dato:'. gettype($no) .'<br>';
	//constante
	define('PI', 3.16);
	echo 'La constant mayu,  pi es: '. PI.'<br>';
	$num= array('1','2','3' );
	echo $num[1] .'<br>';
	$mes= array('Mes1' =>'Ene' ,'Mes2'=>'Febe');
	$mes['Mes1']='Grande';
	echo  $mes['Mes1'].'<br>';
	$mesb= array(
				$Productos = array('Tipo' =>'Tuberculos'),
				$Precios = array('Tuberculo' => 150 ));
	print_r($mesb);
	echo "<br>";
	$cuenta= count($mes);
	echo $cuenta.'<br>';
	$ultimo=count($mes)-1;
	echo '<hr>';
	echo '<ul>';
foreach ($num as $res) {
	echo'<li>'. $res."</li>";
	}
echo '</ul>';
//ordenas arreglos
sort($mes);//
rsort($mes);//reversa
//=== mismo valor mismo tipo
echo '<ul>';
foreach ($mes as $key ) {
	echo'<li>'. $key."</li>";
}
echo '</ul>';
$edad=10;
if ($edad=18 &&  $edad> 0) {
	echo "es 18";
}
if ($edad< 17 or  $edad> 18) {
	echo "no es  18	";
}
//xor solo 1 de las condiciones
$n1=10;
$n2=6;
$res=$n1 % $n2;
echo "<br>".$res;
switch ($mes) {
	case 'ene':
		echo "evero";
	break;	
	default:
			echo "no";
	break;
}
///si tiene valor la variable
$usu;
isset($usu);
$vax = 1;
while ($vax<= 5) {
	echo $vax.'<br>';
	$vax++;
}
//recorrer arreglos con for
for ($i=0; $i <count($mes) ; $i++) { 
echo $mes[$i].'<br>';
}
$vi=1;
do {
	echo $vi;
	$vi++;
} while ($vi <= 10);
$datos= array('Nombre' => 'Pepe','edad'=>10 );	
echo "<hr>";
echo "<h1>oreach</h1>";
foreach ($datos as $indice => $valor) {
		echo $indice.' ::: '.$valor .'<br>';
	}
//break termina el bucle		
//continue: salta la opcion
echo "<hr>";
	$name="carlo";
	var_dump($name);
	echo '<br>';
	var_dump($datos);
function saludo(){
	echo "yop";
}
saludo();
echo '<hr><br>';
function saludar($inom){
echo 'Hola '.$inom;
}
saludar('pedro');

function reformas($ley){
	$resu = 'Ley:'.$ley;
	return $resu;
}
$ejecuta=reformas('0450');
echo '<br>'.$ejecuta;

?>

</body>
</html>