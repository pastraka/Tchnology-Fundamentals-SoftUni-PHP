<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 10.10.2018 г.
 * Time: 17:55
 */
$line = explode(" ", readline());
$n = intval(readline());
$current = 0;

for ($i = 0; $i < $n; $i++) {
    $current = $line[0];
    unset($line[0]);
    $line = array_values($line);
    array_push($line, $current);
}

foreach ($line as $num) {
    echo $num . " ";
}