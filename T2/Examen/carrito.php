<?php
include 'datosTienda.php';
include 'almacen.php';
include 'FuncionesTienda.php';
//$mezcla_juegos_28 = shuffle($juegos_28);
foreach ($juegos_28 as $juego_28) {
 //echo "$juego_28";
}

//Muestro el texto de la pagina utilizando la constante nombre para el nombre de la pagina
echo "<<---------".nombre_28."----------->> ";
echo "</br>";
echo "------ TU CARRITO ---------";
echo "</br>";
echo "JUEGOS";
echo "</br>";

//Hago un bucle para que me recorra el array uno por uno y me muestre el nombre del articulo junto a su precio
foreach ($juegos_28 as $nombre_28 => $precio_28) {
    echo "$nombre_28 - $precio_28 €</br>";
}
echo "</br>";


echo "-------- COMICS ---------";
echo "</br>";
foreach ($comics_28 as $nombre_28 => $precio_28) {
    echo "$nombre_28 - $precio_28 €</br>";
}
echo "</br>";


echo "-------- NOVELAS ---------";
echo "</br>";
foreach ($novelas_28 as $nombre_28 => $precio_28) {
    echo "$nombre_28 - $precio_28 €</br>";
}
echo "</br>";

$suma_juegos_28 = array_sum($juegos_28);
$suma_comics_28 = array_sum($comics_28);
$suma_novelas_28 = array_sum($novelas_28);
$suma_28 = ($suma_juegos_28 + $suma_comics_28 + $suma_novelas_28);
$precio_promocion_28 = PrecioConDescuento($suma_28, $descuento_28);
echo "PRECIO CARRITO..............".$suma_28. " €";
echo "</br>";
echo "CON LA PROMOCIÓN ".$promocion_28 ;
echo "</br>";
echo "---PRECIO CARRITO ".$precio_promocion_28." €" ;
echo "</br>";

echo fechaEntrega($dias_entrega_28);
echo "</br>";



?>