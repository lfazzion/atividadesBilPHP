<?php
$vet = array(3, 5, 4, 2, 1);
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($vet[$j+1] <= $vet[$j]) {
            $v = $vet[$j];
            $vet[$j] = $vet[$j+1];
            $vet[$j+1] = $v;
        }
    }
    for ($k = 0; $k <= 5; $k++){
        echo "$vet[$k]" . PHP_EOL;
    }
}