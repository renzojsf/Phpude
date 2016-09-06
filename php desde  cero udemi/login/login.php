<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
	$USUARIO=$_POST['usu'];
	$password=$_POST['pass'];
	$password=hash('sha512', $password);
	echo $USUARIO.''.$password;
	try {
	$cone=new PDO('mysql:host=localhost;dbname=ventas','root','');
	} catch (PDOException $e) {		
	}
	$statement=$cone->prepare('SELECT * FROM usuarios WHERE Nombe=:ING_NO AND pas = :pas');
	$statement->execute(array(':ING_NO' =>$USUARIO ,':pas'=>$password));
	$resultado = $statement->fetch();
	var_dump($resultado);
}

require('vistas/loginview.php');

?>