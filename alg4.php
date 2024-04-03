<?php
for ($i = 0; $i < 10; $i++) {
    if ($i == 0) {
        echo "0" . PHP_EOL;
    } else if ($i == 1) {
        echo "1" . PHP_EOL;
    } else {
        $fibonacci = fibonacci($i);
        echo "$fibonacci" . PHP_EOL;
    }
}

function fibonacci($val) {
    if ($val == 0) {
        return 0;
    } else if ($val == 1) {
        return 1;
    } else {
        return fibonacci($val - 1) + fibonacci($val - 2);
    }
}