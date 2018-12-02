<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.10.2018 г.
 * Time: 11:48
 */

$firstFact = floatval(readline());
$secondFact = floatval(readline());

echo calculateFactorials($firstFact, $secondFact);

function calculateFactorials($fact1, $fact2)
{
    $fResult1 = 1;
    $fResult2 = 1;

    for ($i = 1; $i <= $fact1 - 1; $i++) {
        $fResult1 *= ($i + 1);
    }

    for ($i = 1; $i <= $fact2 - 1; $i++) {
        $fResult2 *= ($i + 1);
    }

    $result = $fResult1 / $fResult2;

    return sprintf("%0.2f", $result);


}