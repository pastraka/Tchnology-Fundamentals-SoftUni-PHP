<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 8.10.2018 г.
 * Time: 18:56
 */
$arr = array_map('intval', explode(" ", readline()));
$result = 0;
$evenSum = 0;
$oddSum = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        $evenSum += $arr[$i];
    } else {
        $oddSum += $arr[$i];
    }
}
$result = $evenSum - $oddSum;

echo $result;