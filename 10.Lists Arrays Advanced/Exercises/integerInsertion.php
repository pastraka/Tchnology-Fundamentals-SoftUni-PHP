<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 30.10.2018 г.
 * Time: 18:29
 */

$arr = array_map('intval', explode(" ", readline()));

$line = readline();

while (true) {


    if ($line == "end") {
        break;
    }

    $tokens = str_split($line);
    $index = intval($tokens[0]);
    $num = intval($line);

    array_splice($arr, $index, 0, $num);

    $line = readline();
}

echo implode(" ", $arr);