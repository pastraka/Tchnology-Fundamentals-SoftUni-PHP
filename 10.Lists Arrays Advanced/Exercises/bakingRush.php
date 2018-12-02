<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.10.2018 г.
 * Time: 10:26
 */

$input = explode("|", readline());
$initialEnergy = 100;
$initialCoins = 100;

for ($i = 0; $i < count($input); $i++) {

    $line = $input[$i];
    $tokens = explode('-', $line);
    $event = $tokens[0];

    if ($event == "rest") {

        $energy = intval($tokens[1]);
        $initialEnergy += $energy;
        if ($initialEnergy <= 100) {

            echo "You gained $energy energy." . PHP_EOL;
            echo "Current energy: $initialEnergy." . PHP_EOL;
        } else {
            $initialEnergy -= $energy;
            $energy = 0;
            echo "You gained $energy energy." . PHP_EOL;
            echo "Current energy: $initialEnergy." . PHP_EOL;
        }
    } elseif ($event == "order") {

        $coins = intval($tokens[1]);
        if ($initialEnergy >= 30) {

            $initialCoins += $coins;
            $initialEnergy -= 30;
            echo "You earned $coins coins." . PHP_EOL;

        } else {
            $initialEnergy += 50;
            echo "You had to rest!" . PHP_EOL;
        }

    } else {
        $ingredient = $tokens[0];
        $buyProducts = intval($tokens[1]);

        if ($initialCoins > 0 && ($initialCoins - $buyProducts) > 0) {

            echo "You bought $ingredient." . PHP_EOL;
            $initialCoins -= $buyProducts;
        } else {

            echo "Closed! Cannot afford $ingredient.";
            return;
        }
    }
}
echo "Day completed!" . PHP_EOL;
echo "Coins: $initialCoins" . PHP_EOL;
echo "Energy: $initialEnergy" . PHP_EOL;



