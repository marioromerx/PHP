<?php
include 'datosRestaurante.php';
$dia = date("w");
$apertura = $hora_apertura;
$cierre = $hora_cierre;
if ($dia == 5 || $dia == 6 || $dia == 0) {
    $apertura = minutosAHora(horaAMinutos($hora_apertura) - 30);
    $cierre = minutosAHora(horaAMinutos($hora_cierre) + 45);
}

echo "Abierto de $apertura a $cierre";

?>

