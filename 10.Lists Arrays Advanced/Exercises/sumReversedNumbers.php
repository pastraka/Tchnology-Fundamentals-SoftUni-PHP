<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 30.10.2018 г.
 * Time: 19:10
 */

$arr = explode(" ", readline());

$reversedArr = [];

for ($i = 0; $i < count($arr); $i++) {
    $reversedArr[] .= strrev($arr[$i]);
}
$reversedArr = array_sum($reversedArr);
echo $reversedArr;