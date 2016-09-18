<?php 
function contar(){
$archi='contador.txt';
	if (file_exists($archi)) {
		$cuenta=file_get_contents($archi)+1;
		file_put_contents($archi,$cuenta);
		return $cuenta;
	}else{
		file_put_contents($archi,1);
		return 1;
	}

}
echo contar();
?>