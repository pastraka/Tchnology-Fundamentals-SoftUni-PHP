<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 6.10.2018 г.
 * Time: 16:19
 */
$a = floatval(readline());
$b = floatval(readline());
$eps = 0.000001;

if (abs($a - $b) > $eps) {
    echo "False" . PHP_EOL;
} else {
    echo "True" . PHP_EOL;
}