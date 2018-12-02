<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 3.10.2018 г.
 * Time: 18:24
 */
$input = readline();

for ($i = 1; $i <= $input; $i++) {
    $sum = 0;
    $digit = $i;

    while ($digit > 0) {
        $sum += $digit % 10;
        $digit = $digit / 10;
    }
    if ($sum == 5 || $sum == 7 || $sum == 11) {
        echo "$i -> True" . PHP_EOL;
    } else {
        echo "$i -> False" . PHP_EOL;
    }
}