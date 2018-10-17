<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
  </head>
  <body>
    <?php
    function mostrarError($mensaje)
    {
        echo "<h3>Error: $mensaje</h3>";
    }

    function mostrarTabla($numero)
    { ?>
        <table border='1'>
            <thead>
          <th><?= $numero ?></th>
          <th>x</th>
          <th>n</th>
          <th>=</th>
          <th>m</th>
            </thead>
            <tbody>
          <?php for ($i = 0; $i < 10; $i++){ ?>
                <tr>
                    <td><?= $numero ?></td>
                    <td>x</td>
                    <td><?= $i ?></td>
                    <td>=</td>
                    <td><?= $numero * $i ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php
    }

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
    }?>
  </body>
</html>
