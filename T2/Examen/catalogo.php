<?php
//Incluyo las otras dos paginas para obtener sus datos
include 'datosTienda.php';
include 'almacen.php';

//Muestro el texto de la pagina utilizando la constante nombre para el nombre de la pagina
echo "<<---------".nombre_28."----------->> ";
echo "</br>";
echo "DATE UN CAPRICHO";
echo "</br>";
echo "JUEGOS";
echo "</br>";

//Hago un bucle para que me recorra el array uno por uno y me muestre el nombre del articulo junto a su precio
foreach ($juegos_28 as $nombre_28 => $precio_28) {
    echo "$nombre_28 - $precio_28 €</br>";
}


echo "-------- COMICS ---------";
echo "</br>";
foreach ($comics_28 as $nombre_28 => $precio_28) {
    echo "$nombre_28 - $precio_28 €</br>";
}


echo "-------- NOVELAS ---------";
echo "</br>";
foreach ($novelas_28 as $nombre_28 => $precio_28) {
    echo "$nombre_28 - $precio_28 €</br>";
}

//Imprimo los datos de la página de datos tienda
echo "La dirección es ".$direccion_28;
echo "</br>";
echo "El email es: ".$email_28;
?>

