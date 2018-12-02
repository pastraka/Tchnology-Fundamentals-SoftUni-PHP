<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 2.10.2018 г.
 * Time: 16:29
 */
$lostGames = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());

$headsetCounter = 0;
$mouseCounter = 0;
$keyboardCounter = 0;
$displayCounter = 0;

for ($i = 1; $i <= $lostGames; $i++) {
    if ($i % 2 == 0) {
        $headsetCounter++;
    }
    if ($i % 3 == 0) {
        $mouseCounter++;
    }
    if ($i % 2 == 0 && $i % 3 == 0) {
        $keyboardCounter++;

        if ($keyboardCounter % 2 == 0) {
            $displayCounter++;
        }
    }
}

$rageExpenses = ($headsetPrice * $headsetCounter) + ($mouseCounter * $mousePrice) + ($keyboardCounter * $keyboardPrice) + ($displayCounter * $displayPrice);
$rageExpenses = sprintf("%0.2f", $rageExpenses);

echo "Rage expenses: $rageExpenses lv." . PHP_EOL;