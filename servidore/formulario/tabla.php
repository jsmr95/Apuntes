<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
  </head>
  <body>
    <?php
        require './auxiliar.php';

        if (!isset($_GET['num'])){
        mostrarError('falta el parametro <i>num</i>');
        } else {
            $numero = $_GET['num'];
            if (!ctype_digit($numero)){
            mostrarError('Se ha pasado algo que no es un número');
            } else {
                if ($numero < 0 || $numero > 10){
                    mostrarError('El numero debe estar entre 0 y 10.');
                } else {
                    mostrarTabla($numero);
                }
            }
        }
    ?>
  </body>
</html>
