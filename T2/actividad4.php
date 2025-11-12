<!DOCTYPE html>
<html>
<meta charset="utf-8"/>
<body>
<?php
//Ejercicio 1: Valor absoluto
$a = rand(-10,10);
echo abs($a);
echo "<br/>";
echo "<br/>";
//Ejercicio 2: Numero más grande
$num1 = rand(1,10);
$num2 = rand(1,10);
echo "num1 es: ", $num1; echo "<br/>";
echo "num2 es: ", $num2; echo "<br/>";


if ($num1 > $num2) {
    echo $num1, " es el número más grande";
}
else if ($num2 > $num1) {
    echo $num2, " es el número más grande";
}
echo "<br/>";
echo "<br/>";

//Ejercicio 3: Numero mas grande (IGUAL)
$num1 = rand(1,10);
$num2 = rand(1,10);
echo "num1 es: ", $num1; echo "<br/>";
echo "num2 es: ", $num2; echo "<br/>";


if ($num1 > $num2) {
    echo $num1, " es el número más grande";
}
else if ($num2 > $num1) {
    echo $num2, " es el número más grande";
}
else {
    echo "Ambos números son iguales"; 
}
echo "<br/>";
echo "<br/>";


//Ejercicio 4: Ordenar mayor a menor
$num1 = rand(1,10);
$num2 = rand(1,10);
echo "num1 es: ", $num1; echo "<br/>";
echo "num2 es: ", $num2; echo "<br/>";


if ($num1 > $num2) {
    echo $num1, " > ", $num2;
}
else if ($num2 > $num1) {
    echo $num2, " > ", $num1;
}
else {
    echo $num1, " = ", $num2; 
}
echo "<br/>";
echo "<br/>";

//Ejercicio 5: Bisiesto
$anio = rand(1,2025);
echo $anio;
if (($anio % 4 == 0 and $anio % 100 != 1) or ($anio % 400 == 0)){
    echo " es año bisiesto";

} else{ 
    echo " no es año bisiesto";
}

echo "<br/>";
echo "<br/>";

//Ejercicio 6:
$suma = 0;
$contador = 1;
while ($contador <=100) {
    $suma=$suma+$contador;
    $contador++;
}
echo "La suma de los números del 1 al 100 es: ", $suma;

echo "<br/>";
echo "<br/>";

//Ejercicio 7
$factorial = 1;
$contador = 1;
while ($contador <=10) {
    $factorial=$factorial*$contador;
    $contador++;
}
echo "El factorial de 10 es: ", $factorial;
echo "<br/>";
echo "<br/>";
//Ejercicio 8:
$numero = rand(1,50);
$division = 1;
echo "Los divisores de ", $numero, " son: </br>";
while ($numero >= $division) {
    if ($numero % $division  == 0) {
        echo $division, "<br/>";
    }
    $division++;
}
"<br/>";
"<br/>";
//Ejercicio 9:
$primo = 97;
$divisibles = 0;
$aum = 1;
while ($primo >= $aum) {
    if ($primo % $aum  == 0) {
        $divisibles++;
    }
    $aum++;
}
if ($divisibles==2) {
    echo $primo, " es primo";
}
else if ($divisibles>2) {
    echo $primo, " no es primo";
}
echo "<br/>";
echo "<br/>;";

//EJERCICIO 10
echo "La sucesión de Fibonacci: <br/>";
$fibo1 = 0;
$fibo2 = 1;
$fibo3;
$conteo = 20;
while ($conteo > 0){
    echo $fibo1, " ";
    $fibo3=$fibo1+$fibo2;
    $fibo1=$fibo2;
    $fibo2=$fibo3;
    $conteo--;
}
echo "<br/>";
echo "<br/>";

//Ejericico Cambio Moneda
const EURO_DOLAR = 1.05;
$nombre = "Fulanito Pérez Pérez";
$entrega = 520.5;
$recibe = $entrega*EURO_DOLAR;
echo '<table style="border: 1px solid black;">';
echo '<caption style="border: 1px solid black;"> SU RECIBO DE CAMBIO DE EUROS A DÓLARES</caption>';

echo '<tr style="border: 1px solid black;">';
echo '<td style="border: 1px solid black;" colspan="2">SR/A. ' . $nombre . '</td>';
echo '</tr>';

echo '<tr style="border: 1px solid black;">';
echo '<td style="border: 1px solid black;">Entrega: ' . $entrega . '</td>';
echo '<td style="border: 1px solid black;">Recibe: ' . $recibe . '</td>';
echo '</tr>';

echo '<tr style="border: 1px solid black;">';
echo '<td style="border: 1px solid black;" colspan="2">En Granada a ' . date("d.m.y") . '</td>';
echo '</tr>';

echo '</table>';

?>
<p> Mario Romera Braojos </p>
</body>
</html>

