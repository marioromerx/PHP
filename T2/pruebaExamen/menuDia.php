<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Prueba PHP</title>
</head>
<body>
    <?php
include 'datosRestaurante.php';
include 'cocina.php';
include 'funcionesRestaurantes.php';

$primerosMenu = [];
foreach ($primeros as $plato => $precio) {
    $primerosMenu[] = $plato;
}
shuffle($primerosMenu);

$segundosMenu = [];
foreach ($segundos as $plato => $precio) {
    $segundosMenu[] = $plato;
}
shuffle($segundosMenu);

$postresMenu = [];
foreach ($postres as $plato => $precio) {
    $postresMenu[] = $plato;
}
shuffle($postresMenu);

echo "Rte. ->> $nombre <--- <br/>";
echo "Primeros: ". $primerosMenu[0]. ", ". $primerosMenu[1]. "<br/>";
echo "Segundos: ". $segundosMenu[0]. ", ". $segundosMenu[1]. "<br/>";
echo "Postres: ". $postresMenu[0]. ", ". $postresMenu[1]. "<br/>";

$precioMenu = mediaPrecios($primeros) + mediaPrecios($segundos) + mediaPrecios($postres);
echo "$precioMenu";
?>
    <p>Mario Romera Braojos <p>
</body>
</html>