<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
    <?php


$bebidas = array("Café","Té","Agua","Cerveza","Vino","Refresco");
$ventas = array(120, 95.00, 40.00, 80.00, 150.25, 99.90, 110.00);

echo "<h1>BEBIDAS</h1>";
echo "<ul>";
foreach ($bebidas as $b) {
echo "<li>", $b, "</li>";
    $b + $ventas;
}
echo "</ul>";
    

/*
$bebidas = array("Café","Té","Agua","Cerveza","Vino","Refresco");
$ventas = array(120.50, 95.00, 130.75, 80.00, 150.25, 99.90, 110.00, 145.30, 88.00, 102.40, 97.60, 123.00, 134.80, 90.10, 160.00);

echo "<h1>BEBIDAS</h1>";
echo "<ul>";
foreach ($bebidas as $b) {
    echo "<li>$b</li>";
}
echo "</ul>";

echo "<h1>VENTAS</h1>";
echo "Total quincena: " . array_sum($ventas);

*/




    ?>
    <p>Mario Romera Braojos <p>
</body>
</html>