<?php 
function conectar($bd,$usu,$pas){
	try {
			$cone=new PDO("mysql:host=localhost;dbname=$bd",$usu,$pas);
			return $cone;
	} catch (PDOException $e) {
			return false;
	}


}
?>