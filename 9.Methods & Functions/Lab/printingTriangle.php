<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 09:26
 */

$input = intval(readline());

function printLine($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        echo $i . " ";
    }
    echo " " . PHP_EOL;
}

for ($i = 0; $i < $input; $i++) {
    printLine(1, $i);
}

printLine(1, $input);

for ($i = $input - 1; $i >= 0; $i--) {
    printLine(1, $i);
}