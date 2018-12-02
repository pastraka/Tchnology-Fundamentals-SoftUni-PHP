<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 7.10.2018 г.
 * Time: 17:35
 */
$line = readline();

$items = explode(" ", $line);

for ($j = 0; $j < count($items); $j++) {

    $items[$j] = sprintf("%0.2f", $items[$j]);
}

for ($i = 0; $i < count($items); $i++) {
    $current = intval(round($items[$i]));

    echo "$items[$i] => $current" . PHP_EOL;
}