    <?php

$x = 4;

if (6) {
    echo "Vale 4";
} else {
    echo "Vale 5";
}

if (6):
    echo "Vale 4";
else:
    echo "Vale 5";
endif;
//esto es lo mismo que arriba pero de otro modo.


switch ($x) {
    case 2:
        echo "Vale 2";
        break;
    case 3:
        echo "Vale 3";
        break;
    case 4:
        echo "Vale 4";
        break;
    default:
        echo "Vale otra cosa";
        break;
}
echo "\n";

while ($x < 10) {
    echo "$x\n";
    $x++;
}


while ($x < 10):
    echo "$x\n";
endwhile;
//otro modo de usar while




for ($i = 0; $i < 10; $i++) {
    echo "$i\n";
}

for ($i = 0;$i <10; $i++):
    echo "$i\n";
endfor;
//Otro modo de usar for


echo "La i vale $i\n";





