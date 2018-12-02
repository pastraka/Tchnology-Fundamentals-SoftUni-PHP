<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 5.10.2018 г.
 * Time: 07:31
 */
$n = intval(readline());
$currSnowBallValue = 0;
$currSnowBallSnow = 0;
$currSnowBallTime = 0;
$currSnowBallQuality = 0;

for ($i = 0; $i < $n; $i++) {

    $snowBallSnow = intval(readline());
    $snowBallTime = intval(readline());
    $snowBallQuality = intval(readline());
    $snowBallValue = bcpow($snowBallSnow / $snowBallTime, $snowBallQuality);

    if ($snowBallValue >= $currSnowBallValue) {
        $currSnowBallValue = $snowBallValue;
        $currSnowBallSnow = $snowBallSnow;
        $currSnowBallTime = $snowBallTime;
        $currSnowBallQuality = $snowBallQuality;
    }
}
echo "$currSnowBallSnow : $currSnowBallTime = $currSnowBallValue ($currSnowBallQuality)";