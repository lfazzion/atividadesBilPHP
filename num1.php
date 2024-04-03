<?php
echo "digite um numero de sua preferencia: ";
$numusuario = intval(readline());

for ($contador = 0; $contador <= 10; $contador++) {
    $val = $numusuario * $contador;
    echo "$numusuario * $contador = $val" . PHP_EOL;
}