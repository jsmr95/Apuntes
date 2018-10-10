<?php

unset($argv[0]);

if ($argc >2 || $argc < 2){
    echo "Error: debes indicar un numero, ni mas ni menos.";
    exit(1);
}else{
foreach ($argv as $v):
    if (ctype_digit($v)){
        echo "Tabla del numero $v.\n";
        for ($i=1;$i<=10;$i++):
            echo "$v x $i = ".($v * $i)."\n";
        endfor;
        echo "\n";
        }else{
            echo "No has introducido un valor numérico";
            exit(1);
        }
endforeach;
    }
