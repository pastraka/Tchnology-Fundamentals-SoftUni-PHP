<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 30.10.2018 г.
 * Time: 11:18
 */

$arr = explode(" ", readline());
$tokens = array_map('intval', explode(" ", readline()));

$specialNum = $tokens[0];
$powerNum = $tokens[1];

for ($i = 0; $i < count($arr); $i++) {

    if ($specialNum == $arr[$i]) {
        $startIndex = abs(array_search($specialNum, $arr) - $powerNum);
        $length = ($powerNum * 2) + 1;
        if ($startIndex >= 0 && $startIndex + $length < count($arr)) {

            array_splice($arr, $startIndex, $length);
            $i = $startIndex - 1;
        } elseif ($specialNum < 0) {
            array_splice($arr, $startIndex, $powerNum);
        }else {
            array_splice($arr, $startIndex);
        }

    }
}
$arr = array_sum($arr);
echo $arr;