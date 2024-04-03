<?php
echo "Digite um número inteiro: ";
$num = intval(readline());

for ($i = 1; $i <= $num; $i++) {
    $val = $num / $i;
    $bol = is_int($val);
    if ($bol) {
        echo "$num é divisível por $i" . PHP_EOL;
    }
}