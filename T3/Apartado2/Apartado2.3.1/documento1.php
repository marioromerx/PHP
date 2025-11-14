<?php
    session_start();
?>
<?php 
$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["apellidos"] = $_POST["apellidos"];

?>
<a href="./documento2.php">Redireccionar</a>