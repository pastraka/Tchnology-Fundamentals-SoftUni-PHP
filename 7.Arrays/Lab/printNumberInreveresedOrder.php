<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 7.10.2018 г.
 * Time: 11:53
 */
$input = intval(readline());
$arr = [];

for ($i = 0; $i < $input; $i++) {
    $arr[$i] = intval(readline());
}
for ($i = $i - 1; $i >= 0; $i--) {
    echo $arr[$i] . " ";
}
