<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
    <?php

$cadena = "salas";
if (strrev($cadena) == $cadena) {
    echo "La cadena es palíndromo";
} else {
    echo "La cadena no es palíndromo";
}

echo "<br/>";


$cadena2 = "la caracola está en la playa";
$sol = substr($cadena2,0,2);

$contador = explode($sol, $cadena2);
echo "La subcadena (".$sol.")  aparece " . (count($contador)-1) . " veces.";


?>
    <p>Mario Romera Braojos<p>
</body>
</html>