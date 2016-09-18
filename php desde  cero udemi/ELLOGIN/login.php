<?php 
session_start();
if (isset($_SESSION['usuario'])) {
	header('location:index.php');
}
$errores="";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$USUARIO=$_POST['usuario'];
	$password=$_POST['password'];
	$password=hash("sha512", $password);

	
	try {
	$cone=new PDO('mysql:host=localhost;dbname=ventas','root','');
	} catch (PDOException $e) {		
	}
	$statement=$cone->prepare('SELECT * FROM usuarios WHERE Nombe=:ING_NO AND pas = :pas');
	$statement->execute(array(':ING_NO' =>$USUARIO ,':pas'=>$password));
	$resultado = $statement->fetch();
	if ($resultado !=false) {
		$_SESSION['usuario']=$USUARIO;
		header('location:index.php');
	}else{
		$errores.="<li>Datos incorrrects</li>";
	}
	var_dump($resultado);
}


require("vista/login.view.php");
?>