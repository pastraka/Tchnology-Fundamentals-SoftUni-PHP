<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 9.10.2018 г.
 * Time: 18:15
 */
$wagons = intval(readline());
$line = intval(readline());
$arr = [];
$sum = 0;

for ($i = 0; $i < $wagons; $i++) {
    $arr[$i] = $line;
    $sum += $arr[$i];
    $line = intval(readline());
}
foreach ($arr as $num) {
    echo $num . " ";
}
echo PHP_EOL . $sum;