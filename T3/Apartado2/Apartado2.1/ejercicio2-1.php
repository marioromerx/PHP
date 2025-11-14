<?php 
$nombre = $_POST["nombre"];
$roles = $_POST['roles'];
echo "<p>Bienvenido/a, ", $nombre, " con rol ";

foreach ($roles as $trabajo) {
 echo $trabajo;
}


?>

