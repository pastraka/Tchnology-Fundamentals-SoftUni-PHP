<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 3.10.2018 г.
 * Time: 13:37
 */
$num = (readline());

$area = pi() * pow($num, 2);
$area = sprintf("%0.12f", $area);

echo $area;