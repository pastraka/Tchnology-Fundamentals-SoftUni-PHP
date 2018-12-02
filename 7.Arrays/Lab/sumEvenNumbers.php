<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 8.10.2018 г.
 * Time: 18:45
 */
$arr = array_map('intval', explode(" ", readline()));
$sum = 0;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        $sum += $arr[$i];
    }
}
echo $sum;