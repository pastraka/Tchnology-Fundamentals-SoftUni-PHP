<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.10.2018 г.
 * Time: 20:14
 */

$wagons = array_map('intval', explode(" ", readline()));
$capacity = intval(readline());

$line = readline();
while ($line != "end") {
    $tokens = explode(' ', $line);

    if (count($tokens) == 2) {
        $add = $tokens[0];
        $passengersToAdd = $tokens[1];
        $wagons[] = $passengersToAdd;
    } else {
        $passengers = $tokens[0];

        for ($i = 0; $i < count($wagons); $i++) {
            if ($wagons[$i] + $passengers <= $capacity) {
                $wagons[$i] += $passengers;
                break;
            }
        }
    }

    $line = readline();
}

echo implode(" ", $wagons);

