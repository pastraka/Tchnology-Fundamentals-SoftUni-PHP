<?php

$input = intval(readline());

for ($i = 2; $i <= $input; $i++) {
    $bool = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $bool = false;
            break;
        }
    }

    if ($bool)
        printf("%d -> true" . PHP_EOL, $i);
    else
        printf("%d -> false" . PHP_EOL, $i);
}