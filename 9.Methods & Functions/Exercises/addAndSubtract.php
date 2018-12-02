<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.10.2018 г.
 * Time: 07:23
 */
$int1 = intval(readline());
$int2 = intval(readline());
$int3 = intval(readline());

echo addAndSubtract($int1, $int2, $int3);

function addAndSubtract(int $n1, int $n2, int $n3): int
{
    return ($n1 + $n2) - $n3;
}


