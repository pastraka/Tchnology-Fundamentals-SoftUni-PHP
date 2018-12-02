<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26.10.2018 г.
 * Time: 17:18
 */
$numbers = array_map("floatval", explode(" ", readline()));

for ($i = 0; $i < count($numbers) - 1; $i++) {

    if ($numbers[$i] === $numbers[$i + 1]) {
        $current = $numbers[$i] + $numbers[$i + 1];
        $numbers[$i] = $current;
        array_splice($numbers, $i + 1, 1);
        $i = -1;
    }
}

echo implode(" ", $numbers);
