<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 2.10.2018 г.
 * Time: 18:38
 */
$currentBalance = floatval(readline());
$price = 0;
$totalSpent = 0;

//        OutFall 4, CS: OG, Zplinter Zell, Honored 2, RoverWatch, RoverWatch Origins Edition

$games = readline();

while ($games != "Game Time") {
    switch ($games) {
        case ($games == "OutFall 4"):
            if ($currentBalance >= $price = 39.99) {
                $currentBalance -= $price;
                $totalSpent += $price;
                echo "Bought OutFall 4" . PHP_EOL;
            } else {
                echo "Too Expensive" . PHP_EOL;
            };
            break;
        case ($games == "CS: OG"):
            if ($currentBalance >= $price = 15.99) {
                $currentBalance -= $price;
                $totalSpent += $price;
                echo "Bought CS: OG" . PHP_EOL;

            } else {
                echo "Too Expensive" . PHP_EOL;
            };
            break;
        case ($games == "Zplinter Zell"):
            if ($currentBalance >= $price = 19.99) {
                $currentBalance -= $price;
                $totalSpent += $price;
                echo "Bought Zplinter Zell" . PHP_EOL;
            } else {
                echo "Too Expensive" . PHP_EOL;
            };
            break;
        case ($games == "Honored 2"):
            if ($currentBalance >= $price = 59.99) {
                $currentBalance -= $price;
                $totalSpent += $price;
                echo "Bought Honored 2" . PHP_EOL;
            } else {
                echo "Too Expensive" . PHP_EOL;
            };
            break;
        case ($games == "RoverWatch"):
            if ($currentBalance >= $price = 29.99) {
                $currentBalance -= $price;
                $totalSpent += $price;
                echo "Bought RoverWatch" . PHP_EOL;
            } else {
                echo "Too Expensive" . PHP_EOL;
            };
            break;
        case ($games == "RoverWatch Origins Edition"):
            if ($currentBalance >= $price = 39.99) {
                $currentBalance -= $price;
                $totalSpent += $price;
                echo "Bought RoverWatch Origins Edition" . PHP_EOL;
            } else {
                echo "Too Expensive" . PHP_EOL;
            };
            break;
        default:
            echo "Not Found" . PHP_EOL;
            break;
    }
    if ($currentBalance == 0) {
        echo "Out of money!" . PHP_EOL;
        return;
    }

    $games = readline();
}

$totalSpent = sprintf("%0.2f", $totalSpent);
$currentBalance = sprintf("%0.2f", $currentBalance);

echo "Total spent: $$totalSpent. Remaining: $$currentBalance" . PHP_EOL;