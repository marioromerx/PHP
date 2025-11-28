<?php
include "E1_procesaFormularioNIF.php";
$nombre = $_POST["nombre"];
$nif = $_POST["NIF"];

if (verificadorNIF($nif)) {
    echo "El NIF de $nombre está bien";
} else {
    echo "El NIF de $nombre está mal";
}
?>
