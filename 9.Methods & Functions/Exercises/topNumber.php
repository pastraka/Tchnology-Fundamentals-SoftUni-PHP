<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.10.2018 г.
 * Time: 18:40
 */

$input = readline();

for ($i = 15; $i < $input; $i++) {
    if (checkTop($i)) {
        echo checkTop($i) . PHP_EOL;
    }
}

function checkTop($num)
{

    $sum = 0;
    $oddNum = 0;
    $currentNum = str_split($num);

    for ($i = 0; $i < count($currentNum); $i++) {
        $sum += $currentNum[$i];
        if ($currentNum[$i] % 2 != 0) {
            $oddNum++;
        }
    }
    if ($sum % 8 == 0 && $oddNum > 0) {
        return $num;
    }
    return false;
}