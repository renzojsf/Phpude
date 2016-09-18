<?php 
echo pathinfo("docu.txt",PATHINFO_BASENAME);
echo "<br><hr>";
echo pathinfo("usuario/archivo/docu.txt",PATHINFO_DIRNAME);
echo "<br><hr>";
echo pathinfo("docu.txt",PATHINFO_EXTENSION);
echo "<br><hr>";
echo pathinfo("docu.txt",PATHINFO_FILENAME);
echo "<br><hr>";
$busca=glob('*.php');
echo "<fieldset>";
print_r($busca);
echo "</fieldset>";
echo "<br><hr>";
$busca2=glob('*.{php,txt}',GLOB_BRACE);
echo "<fieldset>";
print_r($busca2);
echo "</fieldset>";
echo "<br><hr>";

echo basename('ruta/carpteta/yo.php');
echo basename('ruta/carpteta/yo.php','.php');
echo "<br><hr>";
dirname('archivos/docu.txt');
?>