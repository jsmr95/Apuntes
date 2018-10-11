<?php

declare(strict_types=1);

//TIPADO ESTRICTO
require './auxiliar.php';

echo suma(4,3) . "\n";
echo suma(5) . "\n";
echo suma(4,null) . "\n";
echo suma(null,null)."\n";
//null evalua a 0 como numeric si no esta definido el
//tipo del argumento ó hacerlo tipo nullable
//con el ? delante del tipo, que hace que pueda admitir nulos
