<?php
$input = readline();
$totalMoney = 0;

//0.1, 0.2, 0.5, 1, and 2 coins
//"Nuts", "Water", "Crisps", "Soda", "Coke".
//The prices are: 2.0, 0.7, 1.5, 0.8, 1.0

while ($input != "Start") {
    $inputCoins = floatval($input);
    if ($inputCoins == 0.1 || $inputCoins == 0.2 || $inputCoins == 0.5 || $inputCoins == 1 || $inputCoins == 2) {
        $totalMoney += $inputCoins;
    } else {
        echo "Cannot accept $inputCoins" . PHP_EOL;
    }
    $input = readline();
}

$input = readline();

while ($input != "End") {
    if ($input == "Nuts") {
        if ($totalMoney >= 2) {
            echo "Purchased nuts" . PHP_EOL;
            $totalMoney -= 2;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } else if ($input == "Water") {
        if (round($totalMoney) >= 0.7) {
            echo "Purchased water" . PHP_EOL;
            $totalMoney -= 0.7;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } else if ($input == "Crisps") {
        if (round($totalMoney) >= 1.5) {
            echo "Purchased crisps" . PHP_EOL;
            $totalMoney -= 1.5;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } else if ($input == "Soda") {
        if (round($totalMoney) >= 0.8) {
            echo "Purchased soda" . PHP_EOL;
            $totalMoney -= 0.8;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } else if ($input == "Coke") {
        if ($totalMoney >= 1) {
            echo "Purchased coke" . PHP_EOL;
            $totalMoney -= 1;
        } else {
            echo "Sorry, not enough money" . PHP_EOL;
        }
    } else {
        echo "Invalid product" . PHP_EOL;
    }
    $input = readline();
}
echo "Change: " . number_format(abs($totalMoney), 2);