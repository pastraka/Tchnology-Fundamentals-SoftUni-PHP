<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 10.10.2018 г.
 * Time: 18:14
 */
//$arr = explode(" ", readline());
//$newArr = [];
//
//for ($i = 0, $j = 1; $j < count($arr); $i++, $j++) {
//    if ($arr[$i] > $arr[$j]) {
//        $newArr[$i] = $arr[$i];
//    } else {
//        unset($arr[$i]);
//        $arr = array_values($arr);
//        $i = -1;
//        $j = 0;
//    }
//}
//$newArr[$i] = $arr[$i];
//
//foreach ($newArr as $item) {
//    echo $item . " ";
//}

$arr = explode(" ", readline());
$newArr = [];

for ($i = 0; $i < count($arr); $i++) {
    $isBigger = true;
    $currentEL = $arr[$i];

    for ($j = $i + 1; $j < count($arr); $j++) {
        $nextEL = $arr[$j];
        if ($currentEL <= $nextEL) {
            $isBigger = false;
            break;
        }
    }
    if ($isBigger) {
        $newArr[] = $currentEL;
    }
}

echo implode(" ", $newArr);
