<?php 

function comprobar_session(){
	if (isset($_SESSION['usuario'])) {
	header('location:index.php');


}
?>