<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 2.11.2018 г.
 * Time: 17:27
 */
$arr = array_map("intval", explode(" ", readline()));
$line = readline();

while (true) {
    if ($line == "end") {
        break;
    }

    $tokens = explode(" ", $line);
    $command = $tokens[0];
    switch ($command) {
        case "swap":
            $indexOne = intval($tokens[1]);
            $indexTwo = intval($tokens[2]);
            $temp1 = $arr[$indexOne];
            $temp2 = $arr[$indexTwo];
            $arr[$indexOne] = $temp2;
            $arr[$indexTwo] = $temp1;
            break;
        case "multiply":
            $indexOne = intval($tokens[1]);
            $indexTwo = intval($tokens[2]);

            $newValue = $arr[$indexOne] * $arr[$indexTwo];
            array_splice($arr, $indexOne, 1, $newValue);
            break;
        case "decrease":
            $number = intval($tokens[1]);

            for ($i = 0; $i < count($arr); $i++) {
                $arr[$i] -= $number;
            }
            break;
        case "increase":
            $number = intval($tokens[1]);

            for ($i = 0; $i < count($arr); $i++) {
                $arr[$i] += $number;
            }
            break;
        case "remove":
            $index = $tokens[1];

            unset($arr[$index]);
            $arr = array_values($arr);
            break;
    }
    $line = readline();
}

echo implode(", ", $arr);