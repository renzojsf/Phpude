<?php
$resultado=file_exists('docu.txt');  
//var_dump($resultado);
if (file_exists('docu.txt')) {
	echo "existe";
}else{
	echo "no encontrado";
}
echo file_get_contents('docu.txt');//lee
//file_put_contents('docu.txt','sobrecrito');
file_put_contents('docu.txt',"agregado \n",FILE_APPEND);//AL FINAL AGREGA
//sobrecribe
file_put_contents("docu2.txt",'');
	for ($i=0; $i < 5; $i++) { 
		file_put_contents("docu2.txt","$i \n",FILE_APPEND);
	}
echo "<br><hr>";
$archi=FILE('docu2.txt');
print_r($archi);
?>