<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.10.2018 г.
 * Time: 21:45
 */
$input = floatval(readline());

$onePound = 1.31;
$dollars = round($onePound * $input, 3);
echo sprintf("%0.3f", $dollars);