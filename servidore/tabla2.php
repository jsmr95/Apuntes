<?php

require __DIR__ . '/auxtabla2.php';

if ($argc < 2) {
    muestraError("debes indicar el número de la tabla a mostrar.");
}
if ($argc > 2) {
    muestraError("has pasado demasiados argumentos.");
}
$numero = $argv[1];
if (!ctype_digit($numero)){
    muestraError("el argumento no es un número.");
}
$numero = (int) $numero;
if ($numero < 0 || $numero > 10) {
    muestraError("debe estar entre 0 y 10.");
}
muestraTabla(tablaMult($numero), $numero);
