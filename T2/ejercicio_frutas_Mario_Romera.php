<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
    <?php

$listaFrutasPrecio = array('Peras' => 2.15, 'Limones' => 2.80, 'Cerezas' => 3.35, 'Naranjas' =>
5.31, 'Uvas' => 3.42, 'Manzanas' => 4.43, 'Mango' => 3.90);
//y teniendo en cuenta que el maximo de kilos que podemos cargar es de 10 y que como
//mucho tenemos 20€, hacer un programa, C9_pedidoFrutas.php, que genere un pedido de
//frutas al azar con estas limitaciones y que salga asi
function shuffle_asociativo(&$array) {
    //tomamos solos las claves en un array aparte
        $claves = array_keys($array);
    //barajamos el array de $claves
        shuffle($claves);
    //generamos un nuevo array asociativo con las claves y valores correctos
       $nuevo=array();
        foreach($claves as $clave) {
            $nuevo[$clave] = $array[$clave];
        }
    //sobreescribimos el $array, pues se pasa por referencia
        $array = $nuevo;
    //devolvemos true siempre
        return true;
    }
shuffle_asociativo($listaFrutasPrecio);

$limite_kilos = 10.0;
$limite_euros = 20.0;

echo "Hola, cargo maximo 10 kg y tengo 20 €"
echo "-------------------------------------"

$total_kilos = 0.0;
$precio_total = 0.0;

foreach ($listaFrutasPrecio as $$precioKg ) {
    if ($total_kilos >= $limite_kilos or $precio_total >= $limite_euros) 
}


$pedido = []; 

if $precio_total 
    echo "Hola, cargo máximo 10 Kilos y tengo 20 €";
    echo "----------------------------------------";

    echo "El total de kilos es: ". $total_kilos."y vale ".$precio_total;
?>
    <p>Mario Romera Braojos<p>
</body>
</html>