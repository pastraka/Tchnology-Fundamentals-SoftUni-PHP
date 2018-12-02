<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 11:21
 */

$height = intval(readline());
$length = intval(readline());

echo calculateArea($height, $length);

function calculateArea($h, $l)
{

    return $h * $l;
}