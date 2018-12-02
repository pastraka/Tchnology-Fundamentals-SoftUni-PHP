<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.10.2018 г.
 * Time: 20:10
 */
$num = readline();
$length = strlen($num);
$num = str_split($num);
$sum = 0;
$current = 0;

for ($i = 0; $i < $length; $i++) {
    $sum += $num[$i];
}

echo $sum;