<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 27.10.2018 г.
 * Time: 19:47
 */
$firstArr = array_map('intval', explode(" ", readline()));
$secondArr = array_map('intval', explode(" ", readline()));
$newArr = [];
$length = 0;

if (count($firstArr) <= count($secondArr)) {
    $length = count($firstArr);
    for ($i = 0, $j = 0; $i < $length; $i++, $j++) {

        $newArr[] = $firstArr[$i];
        $newArr[] = $secondArr[$j];
    }
} else {
    $length = count($secondArr);
    for ($i = 0, $j = 0; $i < $length; $i++, $j++) {

        $newArr[] = $firstArr[$i];
        $newArr[] = $secondArr[$j];
    }
}

$arrLeft = [];

if (count($firstArr) >= count($secondArr)) {
    $arrLeft = array_slice($firstArr, $length);
} else {
    $arrLeft = array_slice($secondArr, $length);
}

$result = array_merge($newArr, $arrLeft);

echo implode(" ", $result);
