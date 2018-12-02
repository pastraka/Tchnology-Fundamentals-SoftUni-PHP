<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.10.2018 г.
 * Time: 19:02
 */
$length = $width = $height = 0;
echo "Length: ";
$length = floatval(readline());
echo "Width: ";
$width = floatval(readline());
echo "Height: ";
$height = floatval(readline());
$result = ($length * $width * $height) / 3;
echo sprintf("Pyramid Volume: %.2f", $result) . PHP_EOL;
