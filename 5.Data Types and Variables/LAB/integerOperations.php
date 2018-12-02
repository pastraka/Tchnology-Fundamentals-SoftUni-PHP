<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 3.10.2018 г.
 * Time: 13:22
 */
$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());
$num4 = intval(readline());

$result = $num1 + $num2;
$totalResult = floor($result / $num3) * $num4;

echo $totalResult . PHP_EOL;