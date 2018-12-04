<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.11.2018 г.
 * Time: 09:11
 */

$partySize = intval(readline());
$days = intval(readline());
$coins = 0;

for ($i = 1; $i <= $days; $i++) {
    if ($i % 10 == 0) {
        $partySize -= 2;
    }
    if ($i % 15 == 0) {
        $partySize += 5;
    }
    $coins += 50;
    $coins -= $partySize * 2;
    if ($i % 3 == 0) {
        $coins -= $partySize * 3;
    }
    if ($i % 5 == 0) {
        $coins += $partySize * 20;
        if ($i % 3 == 0) {
            $coins -= $partySize * 2;
        }
    }
}
$coins  = floor($coins / $partySize);
echo "$partySize companions received $coins coins each.";