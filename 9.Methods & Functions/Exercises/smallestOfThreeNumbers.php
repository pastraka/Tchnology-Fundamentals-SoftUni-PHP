<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 22.10.2018 г.
 * Time: 09:51
 */

$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());

smallestOfThreeNums($num1, $num2, $num3);

function smallestOfThreeNums(int $n1, int $n2, int $n3): void
{

    if ($n1 <= $n2 && $n1 <= $n3) {

        echo $n1;

    } elseif ($n2 <= $n1 && $n2 <= $n3) {

        echo $n2;

    } elseif ($n3 <= $n2 && $n3 <= $n2) {

        echo $n3;
    }
}