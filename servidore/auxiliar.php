<?php

function muestraError($mensaje)
{
    echo "Error: $mensaje\n";
    exit(1);
}
function tablaMult($numero)
{
    for ($i = 0; $i <= 10; $i++) {
        $res[] = $numero * $i;
    }
    return $res;
}
function muestraTabla(&$tabla, $numero)
{
    foreach ($tabla as $k => $v){
        echo "$numero x $k = $v\n";
    }
    $tabla = ['a','b','c'];
}

function suma(?int $a,?int $b=5):int
{
    return $a + $b;
}
