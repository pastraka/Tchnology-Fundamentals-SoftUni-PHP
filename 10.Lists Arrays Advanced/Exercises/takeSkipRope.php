<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 3.11.2018 г.
 * Time: 09:50
 */

$input = readline();
str_split($input);
$numberList = [];
$nonNumberList = "";

for ($i = 0; $i < strlen($input); $i++) {
    if (is_numeric($input[$i]) == true) {
        $numberList[] = $input[$i];
    } else {
        $nonNumberList .= $input[$i];
    }
}

$takeList = [];
$skipList = [];

for ($i = 0; $i < count($numberList); $i++) {
    if ($i % 2 == 0) {
        $takeList[] = $numberList[$i];
    } else {
        $skipList[] = $numberList[$i];
    }
}

$result = "";
$total = 0;

for ($i = 0; $i < count($skipList); $i++) {
    $skipCount = intval($skipList[$i]);
    $takeCount = intval($takeList[$i]);

    $result .= substr($nonNumberList, $total, $takeCount);
    $total += $skipCount + $takeCount;
}

echo $result;

