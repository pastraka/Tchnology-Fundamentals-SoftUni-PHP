<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 10.10.2018 г.
 * Time: 13:23
 */
$n = intval(readline());
$line = explode(" ", readline());
$blueArr = [];
$redArray = [];
$count = 1;

for ($i = 0; $i < $n; $i++) {
    if ($count % 2 != 0) {
        $redArray[$i] = $line[0];
        $blueArr[$i] = $line[1];
    } else {
        $redArray[$i] = $line[1];
        $blueArr[$i] = $line[0];
    }
    $line = explode(" ", readline());
    $count++;
}

foreach ($redArray as $num) {
    echo $num . " ";
}

echo "\n";

foreach ($blueArr as $num) {
    echo $num . " ";
}