<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
    <?php


    $semana["lunes"] = 5;
    $semana["martes"] =  0;
    $semana["miércoles"] = 2;
    $semana["jueves"] = 3.4;
    $semana["viernes"] = 0;
    $semana["sábado"] =  5;
    $semana["domingo"] =  8;

    $lluviatotal = array_sum($semana);
    echo "La cantidad total de lluvia es de " . $lluviatotal . " litros por metro cuadrado";


$temperaturas = array (
array(1,12,26),
array(2,11,24),
array(3,15,23)

);
echo "<table><caption>Tabla de temperaturas</caption>";
echo "<tr><th>Dia</th><th>Minima</th><th>Maxima</th></tr>";
for ($dia = 0; $dia < 3; $dia++) {
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
         echo "<td>", $temperaturas[$dia] [$col],"</td>";
    }
    echo "</tr>";
}
echo "</table>";

$tempMax = 0;
$dia = 0;

for ($i = 0; $i < count($temperaturas); $i++) {
    if ($temperaturas[$i][2] > $tempMax) {
        $tempMax = $temperaturas[$i][2];
        $dia = $temperaturas[$i][0];
    }
}
echo "La temperatura máxima es $tempMax del día $dia";

$matriz array{
    array(1,2,3,4,5),
    array(6,7,8,9,10),
    array(11,12,13,14,15),
    array(16,17,18,19,20),
    array(21,22,23,24,25),
}

$matriz2 array{
    array(2,4,6,8,10),
    array()
}


function traspuesta($matriz) {
    $filas = count($matriz);
    $columnas = count($matriz);
    $resultado = [];

    for ($i = 0; $i < $columnas)
}
function suma($matriz) {
    $suma [$i][$j];
    $orig[$i][$j]+$traspuesta[$i][$j]
}



?>
    <p>Mario Romera Braojos <p>
</body>
</html>