<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 9.10.2018 г.
 * Time: 18:39
 */
$arr1 = explode(" ", readline());
$arr2 = explode(" ", readline());
$arr3 = [];

for ($i = 0; $i < count($arr2); $i++) {
    for ($j = 0; $j < count($arr1); $j++) {
        if ($arr2[$i] === $arr1[$j]) {
            $arr3[$i] = $arr2[$i];
        }
    }
}
foreach ($arr3 as $word) {
    echo $word . " ";
}