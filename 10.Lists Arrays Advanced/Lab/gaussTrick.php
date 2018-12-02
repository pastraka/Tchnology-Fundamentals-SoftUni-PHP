<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26.10.2018 г.
 * Time: 18:17
 */

$arr = array_map("intval", explode(" ", readline()));
$newArr = [];
$length = count($arr);

for ($i = 0, $j = count($arr) - 1; $i < count($arr) / 2; $i++, $j--) {

    $start = $arr[$i];
    $end = $arr[$j];

    if ($length % 2 == 1) {

        if ($i == intval(count($arr) / 2)) {
            $newArr[] = $arr[$i];
            break;
        }
        $newArr[] = $start + $end;
    } elseif ($length % 2 == 0) {

        if ($i == count($arr) / 2) {

            break;
        }

        $newArr[] = $start + $end;
    }
}

echo implode(" ", $newArr);