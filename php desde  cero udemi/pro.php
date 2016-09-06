<?php 
if(!$_POST){
header('location: forms1.php');
}
$entro=$_REQUEST['nombre'];
htmlspecialchars($entro);//seguridad evitar injeccion 
echo($entro);


if (isset($_REQUEST['pro'])) {
 echo "string";}
?>