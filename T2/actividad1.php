<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
 
    <?php
    $radio=12;
    $area= M_PI*$radio*$radio;
    echo "El area del ciruclo es: ", $area;
    echo "<br/>";  

    echo "La suma de 7 y 4 es: ", 7+4;
    echo "<br/>";
    echo "La resta de 7 y 4 es: ", 7-4;
    echo "<br/>";
    echo "El producto de 7 y 4 es: ", 7*4;
    echo "<br/>";
    echo "La división de 7 y 4 es: ", 7/4;
    echo "<br/>";
    echo "El módulo de 7 y 4 es: ", 7%4;
    echo "<br/>";
    echo "La potencia de 7 y 4 es: ", 7 ** 4;
    echo "<br/>";
    
    $variable1= "Buenos";
    $variable2= "Días";
    echo $variable1." ".$variable2;
    echo "<br/>";

    $edad=16;
    echo "La edad de la persona es: ", $edad;
    echo "<br/>";
    if  ($edad >= 18) {
        echo "Es mayor de edad";
    }
    else {
        echo "No es mayor de edad";
    };
    
    ?>
    
</body>
</html>
