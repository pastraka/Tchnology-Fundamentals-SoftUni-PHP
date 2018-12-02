<?php
$money = floatval(readline());
$countStudents = intval(readline());
$lightsaberPrice = floatval(readline());
$robePrice = floatval(readline());
$beltPrice = floatval(readline());

$lightsaberCount = ceil($countStudents * 1.1);
$robeCount = $countStudents;
$beltCount = $countStudents - intval($countStudents / 6);

$totalMoney = $lightsaberCount * $lightsaberPrice + $robeCount * $robePrice + $beltCount * $beltPrice;

if ($totalMoney <= $money) {
    $totalMoney = sprintf("%0.2f", $totalMoney);
    echo "The money is enough - it would cost $totalMoney" . "lv." . PHP_EOL;
} else {
    $result = sprintf("%0.2f", $totalMoney - $money);
    echo "Ivan Cho will need $result" . "lv more." . PHP_EOL;
}




