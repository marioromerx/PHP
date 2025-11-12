<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
    <?php
$i=0;
do {
    if ($i % 2 == 0) {
        echo $i, " ";
    }
    $i++;
} while ( $i <= 80);

echo "<br/>";

$i=-17;
do {
    echo $i, " ";
    $i++;
} while ( $i <= 17 );

echo "<br/>";

$i=1;
do {
    echo "6 x " , $i, " = ", (6*$i), "<br/> ";
    $i++;

} while ( $i <= 10) ;






$ventas_quincena = [ 520.50, 300.00, 200.99, 1120.75, 650.30, 480.25, 910.80, 775.15, 1300.60, 415.40, 680.95, 1050.00, 720.05, 980.10, 200.00 ];
$total_ventas = 0;

foreach ($ventas_quincena as $venta_diaria) {
   $total_ventas = $total_ventas + $venta_diaria; 
}

echo "El total de las ventas de la quincena es: ".$total_ventas ;



?>
    <p>Mario Romera Braojos<p>
</body>
</html>