<?php
//Incluyo la página de almacen para usarla posteriormente
include 'almacen.php';

function totalArticulos($listaArticulos_28) {
//SUMO EL PRECIO DE TODOS LOS ARTICULOS
$cant_articulos_28 = array_sum($listaArticulos_28);
//DEVUELVO RESULTADO
return $cant_articulos_28;
};

function PrecioConDescuento($precio_28, $descuento_28) {
//PRIMERO CALCULO EL DESCUENTO DEL PRECIO Y LUEGO SE LO RESTO AL PRECIO
$desc_aplicado_28 = $precio_28 - ($precio_28 * $descuento_28 / 100);
return $desc_aplicado_28;
};

function fechaEntrega($tiempoEnvio_28) {
$suma_dias_28 = strtotime("+$tiempoEnvio_28 days");
$fecha_28 =  strftime("%d/%m/%Y",$suma_dias_28);
$resultado = ("La entrega de tu pedido esta prevista para el ".$fecha_28);
    return $resultado;
}



//Comprobar resultado función 1
echo totalArticulos($juegos_28);
echo "</br>";

//Comprobar resultado función 2
echo PrecioConDescuento(100,5);
echo "</br>";

//Comprobar resultado función 3
echo fechaEntrega(5);
echo "</br>";

?>