<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 27.10.2018 г.
 * Time: 09:33
 */
$int = intval(readline());
$products = readline();
$arr = [];

while ($int > 0) {

    $arr[] = $products;

    $products = readline();
    $int--;
}

$i = 1;
sort($arr);

foreach ($arr as $item) {
    echo "$i.$item" . PHP_EOL;
    $i++;
}