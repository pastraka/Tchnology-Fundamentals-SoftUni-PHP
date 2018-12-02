<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 12.10.2018 г.
 * Time: 07:32
 */
$arr = explode(" ", readline());
$n = intval(readline());

for ($i = 0; $i < count($arr); $i++) {

    for ($j = 1; $j < count($arr); $j++) {

        if ($arr[$i] + $arr[$j] == $n) {

            echo $arr[$i] . " " . $arr[$j] . PHP_EOL;
            unset($arr[$i]);
            unset($arr[$j]);
            $arr = array_values($arr);
            $j = 0;
        }
    }
}