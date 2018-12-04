<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.11.2018 г.
 * Time: 09:42
 */

$arr = explode("|", readline());
$initialHealth = 100;
$initialCoins = 0;
$countRooms = 0;
for ($i = 0; $i < count($arr); $i++) {
    $tokens = explode(" ", $arr[$i]);

    $item = $tokens[0];
    $number = intval($tokens[1]);
    $countRooms++;

    if ($item == "potion") {

        if ($initialHealth + $number <= 100) {

            $initialHealth += $number;
            $currHealing = $number;
        } else {

            $currHealing = 100 - $initialHealth;
            $initialHealth += $currHealing;
        }
        echo "You healed for $currHealing hp." . PHP_EOL;
        echo "Current health: $initialHealth hp." . PHP_EOL;

    } elseif ($item == "chest") {

        $initialCoins += $number;
        echo "You found $number coins." . PHP_EOL;
    } else {
        $initialHealth -= $number;
        if ($initialHealth > 0) {
            echo "You slayed $item." . PHP_EOL;
        } else {
            echo "You died! Killed by $item." . PHP_EOL;
            echo "Best room: $countRooms";
            return;
        }
    }
}

echo "You've made it!" . PHP_EOL;
echo "Coins: $initialCoins" . PHP_EOL;
echo "Health: $initialHealth";