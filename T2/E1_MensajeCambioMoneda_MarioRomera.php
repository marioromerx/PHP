<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>EJ1 Mario Romera</title>
</head>
<body>
    <?php
const EURO_DOLAR = 1.05;
$nombre = "Fulanito Pérez Pérez";
$entrega = 520.5;
$recibe = $entrega*EURO_DOLAR;
echo '<table style="border: 1px solid black;">';
echo '<caption style="border: 1px solid black;"> SU RECIBO DE CAMBIO DE EUROS A DÓLARES</caption>';

echo '<td style="border: 1px solid black;" colspan="2">SR/A. ' . $nombre . '</td>';
echo '<tr>';
echo '<td style="border: 1px solid black;">Entrega: ' . $entrega . '</td>';
echo '<td style="border: 1px solid black;">Recibe: ' . $recibe . '</td>';
echo '</tr>';

echo '<td style="border: 1px solid black;" colspan="2">En Granada a ' . date("d.m.y") . '</td>';

echo '</table>';

?>
<p> Mario Romera Braojos </p>
</body>
</html>