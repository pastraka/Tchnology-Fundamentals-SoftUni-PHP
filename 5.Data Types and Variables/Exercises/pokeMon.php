<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 5.10.2018 г.
 * Time: 13:38
 */
$pokeMonPowerN = intval(readline());
$distanceM = intval(readline());
$exhsaustionFactorY = intval(readline());
$count = 0;
$halfPower = $pokeMonPowerN * 0.5;

while ($pokeMonPowerN >= $distanceM) {
    $pokeMonPowerN -= $distanceM;
    $count++;
    if ($pokeMonPowerN == $halfPower) {

        if ($pokeMonPowerN >= $exhsaustionFactorY && $exhsaustionFactorY > 0) {
            $pokeMonPowerN = intval($pokeMonPowerN / $exhsaustionFactorY);
        }
    }
}

echo $pokeMonPowerN . PHP_EOL;
echo $count;