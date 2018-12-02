<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 13:37
 */

$n = readline();

echo getMultipleOfEvenAndOdds(abs($n));

function getMultipleOfEvenAndOdds($n)
{
    $evenSum = getMultipleOfEven($n);
    $oddSum = getMultipleOfOddSum($n);

    return $evenSum * $oddSum;
}

function getMultipleOfEven($n)
{
    $evenSum = 0;
    $n = str_split($n);
    intval($n);

    for ($i = 0; $i < count($n); $i++) {

        if ($n[$i] % 2 == 0) {
            $evenSum += $n[$i];
        }
    }
    return $evenSum;
}

function getMultipleOfOddSum($n)
{
    $oddSum = 0;
    $n = str_split($n);
    intval($n);

    for ($i = 0; $i < count($n); $i++) {

        if ($n[$i] % 2 != 0) {
            $oddSum += $n[$i];
        }
    }
    return $oddSum;
}