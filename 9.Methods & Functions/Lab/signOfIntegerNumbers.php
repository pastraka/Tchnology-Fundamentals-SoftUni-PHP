<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 20.10.2018 г.
 * Time: 17:35
 */

$num = intval(readline());

echo checkNum($num);

function checkNum($int)
{
    if ($int == 0) {
        return "The number $int is zero.";
    } elseif ($int > 0) {
        return "The number $int is positive.";
    } else {
        return "The number $int is negative.";
    }
}

