<?php
$Var='<> 3qbwerasd';
htmlspecialchars($Var);
//trim elimina al inicio y final
rtrim($Var);//elimina espacio
strlen($Var);//tamaño
echo substr($Var, 0,2);
$Var='<> 3qbwerasd';
echo strtoupper($Var);
echo strtolower($Var);
echo '<hr>';
echo strrpos($Var, 'a');//devuelve posicion
$datos = array('Nombre'=> 'Carlos','Edad'=>15 );
$sema=  array('lu','ma','mie' );
extract($datos);//una ves ejecutada puedo imprimir directamente
echo $Nombre.'<br>';
echo array_pop($datos);///el ultimo elemento  15
//foreach ($resul_pop as $nombre => $value) {
echo "<hr>";
echo join(':::',$sema);
echo "<hr>";
$igv = 5.654556;
echo round($igv,2);
$ale=rand(1,15);
echo ceil(12.1);//da 13
echo "<hr>";
function suma($n1,$n2){
return $n1+$n2;
}
include_once ('vista.php');//genera rarning
//require ('vista.php');//faltal errorr
die();//mata todo de abajo
?>