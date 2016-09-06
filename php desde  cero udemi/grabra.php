<?php 

try {
	$cone=new PDO('mysql:host=localhost;dbname=ventas','root','');
	$consultapreparada=$cone->prepare('INSERT INTO Productos VALUES (NULL,"Sandia")');
	$consultapreparada->execute();
	echo "grbado";

} catch (Exception $e) {
	echo "Errpr:". $e->getMessage();
}
?>