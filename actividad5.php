<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
    <?php

function datos_persona($nombre, $lugar, $ano) {
    echo "$nombre nació en $lugar en el año $ano <br>";
}

datos_persona("Mario","Granada","2005");


/*
function suma(int $a, int $b) {
    echo $a + $b;
}
suma(10,15.52);

declare(strict_types=1);
*/


function triple($numero) {
    return $numero * 3;
}

$num = 2;
$num = triple($num);
echo $num;
echo "<br>";


$base = 5;
$altura = 3;

function area($base, $altura) {
    return $base*$altura;
}

echo "Area: ".area($base,$altura);
echo "<br>";


function perimetro($base, $altura) {
    return 2 * ($base + $altura);
}

echo "Perimetro: ".perimetro($base,$altura);
echo "<br>";


function intercambiar(&$base, &$altura) {
    $temp = $base;
    $base = $altura;
    $altura = $temp;
}



intercambiar($base, $altura);

echo "Después de intercambiar:";
echo "<br>";
echo "Base: $base";
echo "<br>";
echo "Altura: $altura";
echo "<br>";


$bebidas = array("Café", "Té", "Agua", "Cerveza", "Vino", "Refresco");
$numBebidas = count($bebidas);
echo "<h1>Escoja entre una de estas $numBebidas bebidas.</h1>";
foreach ($bebidas as $b) {
    echo "<li>", $b,"</li>";
}

$modulos = array("ASGBD","IP","SRI","SAP", "OGS", "IAW", "ASO");
echo "<h1>Tiene los siguientes módulos:</h1>";
foreach ($modulos as $b) {
    echo "<li>", $b,"</li>";
}

$modulos = array("ASGBD","IP","SRI","SAP", "OGS", "IAW", "ASO");
echo "<h1>Tiene los siguientes módulos:</h1>";
for ($i = 0; $i < count($modulos); $i++) {
    echo "<li>" . $modulos[$i] . "</li>";
}

echo "</ul>";

    ?>
    <p>Mario Romera Braojos<p>
</body>
</html>



