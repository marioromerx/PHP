<html lang="es">
<head>

<title>Suma</title>
<meta charset="utf-8"/>
</head>
<body>
<?php
$a = 4;
$b = 3;
echo $a + $b;


echo "<br/>";


$hora = date("H");

if ($hora < 12) {
    echo "Buenos días";
} 
elseif ($hora > 12 and $hora < 22) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}

echo "<br/>";

$dia = date("N");

switch ($dia) {
case "1":
    print ("Hoy es Lunes");
break;
case "2":
    print ("Hoy es Martes");
break;
case "3":
    print ("Hoy es Miércoles");
break;
case "4":
    print ("Hoy es Jueves");
break;
case "5":
    print ("Hoy es Viernes");
break;
case "6":
    print ("Hoy es Sábado");
break;
case "7":
    print ("Hoy es Domingo");
break;

}

echo "<br/>";

for ($x=0; $x <= 10; $x++) {
    if ($x < 10) {
        echo $x, " ";
    }
    elseif ($x >= 10) {
        echo $x;
    }

}


echo "<br/>";

for ($i=50; $i <= 80; $i++) {
    if ($i % 2 == 0) {
        echo $i, " ";
    }


}

echo "<br/>";

for ($i=-17; $i <= 17; $i++) {
        echo $i, " ";
}

echo "<br/>";

for ($i=1; $i <= 10; $i++) {
        echo "6 x " , $i, " = ", (6*$i), "<br/> ";
}





echo "<br/>";
$i=50;
while ( $i <= 80) {

    if ($i % 2 == 0) {
        echo $i, " ";
    }
    $i++;
}


echo "<br/>";

$i=-17;
while ( $i <= 17 ) {

        echo $i, " ";
        $i++;
}

echo "<br/>";

$i=1;
while ( $i <= 10) {

        echo "6 x " , $i, " = ", (6*$i), "<br/> ";
        $i++;
}



?>
<p>Mario Romera Braojos<p>
</body>
</html>


