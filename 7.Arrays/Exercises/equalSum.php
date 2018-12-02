<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 10.10.2018 г.
 * Time: 20:35
 */
$arr = explode(" ", readline());

for ($i = 0; $i < count($arr); $i++) {
    $rightSum = 0;
    $leftSum = 0;

    for ($j = $i + 1; $j < count($arr); $j++) {
        $rightSum += $arr[$j];
    }

    for ($k = $i - 1; $k >= 0; $k--) {
        $leftSum += $arr[$k];
    }

    if ($leftSum == $rightSum) {
        echo $i;
        return;
    }
    $leftSum = 0;
    $rightSum = 0;
}
echo "no";
