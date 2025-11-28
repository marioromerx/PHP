<?php
function calculaLetraDelNIF($numero) {
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $indice = intval($numero) % 23;
    return $letras[$indice];
}

// Verifica si el NIF es correcto (número+letra)
function verificadorNIF($nif) {
    if (strlen($nif) != 9) return false;
    $numero = substr($nif, 0, 8);
    $letra = strtoupper(substr($nif, 8, 1));
    return (calculaLetraDelNIF($numero) === $letra);
}
?>