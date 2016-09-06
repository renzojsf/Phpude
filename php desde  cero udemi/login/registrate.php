<?php 
if (isset($_SESSION['USUARIO'])) {
	header('Location:inicio.php');
}
if($_SERVER['REQUEST_METHOD']=='POST'){
	$USUARIO=$_POST['USUARIO'];
	$pass=$_POST['pass'];
	$repitepas=$_POST['repitepas'];
	$errores='';

	
	if (empty($USUARIO) or empty($pass) or empty($repitepas)) {
		$errores.='<li>LLena</li>';
	}else{
		
		try {
			$cone=new PDO('mysql:host=localhost;dbname=ventas','root','');
			echo('OK');
		} catch (PDOException $e) {
			echo'Error:'.$e->getMessage();	
		}
		
		$consul=$cone->prepare('SELECT * FROM usuarios WHERE Nombe=:ING_NO LIMIT 1');
		$consul->execute(array(':ING_NO' =>$USUARIO ));
		$resu=$consul->fetch();//rregistro o false*/

		if ($resu !=false) {
		$errores.="<li>El nombre ya existe</li>";
		}
		$pass=hash('sha512', $pass);
		$repitepas=hash('sha512', $repitepas);

		if ($pass!=$repitepas) {
			$errores.='<li>Las contraseñas no son iguales</li>';
		}
	}

	if ($errores=='') {
		$consul=$cone->prepare('INSERT INTO usuarios (Codigo,Nombe,pas) VALUES(null,:usu,:pass)');
		$consul->execute(array(':usu' =>$USUARIO ,':pass'=> $pass));
		header('Location:login.php');
	}

}
require 'vistas/regiview.php';
?>