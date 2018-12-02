<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 20.10.2018 г.
 * Time: 11:03
 */
$arr = array_map('intval', explode(" ", readline()));
$index = 0;
$moves = $arr[0];
$sum = $moves;

while (true) {

    if (($index + $moves) < count($arr)) {
        $sum += $arr[$index + $moves];
        $index += $moves;
        $moves = $arr[$index];
    } elseif (($index - $moves) >= 0) {
        $sum += $arr[$index - $moves];
        $index -= $moves;
        $moves = $arr[$index];
    } else {
        break;
    }
}

echo $sum;