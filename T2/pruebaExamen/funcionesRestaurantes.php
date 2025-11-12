<?php
//Defino la variable de donde va a coger los datos
$precios = array(
    'Gazpachón' => 3.50,
    'Lentejas' => 5.20,
    'Sopa' => 3.90,
    'Carne' => 8.30,
    'Pescado' => 6.20
);

function mediaPrecios($precios) {
    // Divido la suma de los precio entre el numero de precios que hay
    $resultado = (array_sum($precios) / count($precios));
    return $resultado ;
}

echo mediaPrecios($precios);
echo "<br/>";

$hora= "01:43";
function horaAMinutos($hora) {
    //Separo en dos partes la hora
    $partes = explode(":", $hora);
    //Multiplico la hora por 60 para sacarlo en minutos y le sumo la hora
    return $partes[0]*60 + $partes[1];
}
echo horaAMinutos($hora);
echo "<br/>";

$minutos = "103";
function minutosAHora($minutos) {

    // Calculo las horas y minutos
    $horas = ($minutos - ($minutos % 60)) / 60; 
    $mins  = $minutos % 60;
    //Poner un 0 delante de las horas si es menor de 10
    if ($horas < 10) {
        $horas = "0" . $horas;
    } else {
        $horas = "" . $horas;
    }
//Poner un 0 en los minutos si es menor a 10 
    if ($mins < 10) {
        $mins = "0" . $mins;
    } else {
        $mins = "" . $mins;
    }

    echo $horas . ":" . $mins;
}

echo minutosAHora($minutos);


?>