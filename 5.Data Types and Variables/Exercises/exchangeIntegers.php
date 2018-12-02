<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 6.10.2018 г.
 * Time: 09:55
 */
$a = readline();
$b = readline();

echo "Before:" . PHP_EOL;
echo "a = $a" . PHP_EOL;
echo "b = $b" . PHP_EOL;

$current = $a;
$a = $b;
$b = $current;

echo "After:" . PHP_EOL;
echo "a = $a" . PHP_EOL;
echo "b = $b" . PHP_EOL;