<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 29.10.2018 г.
 * Time: 10:46
 */

$arr = array_map('intval', explode(" ", readline()));
$line = readline();

while (true) {
    if ($line == "Odd" || $line == "Even") {
        break;
    }

    $tokens = explode(" ", $line);
    $command = $tokens[0];

    switch ($command) {
        case "Delete":
            $element = intval($tokens[1]);

            foreach (array_keys($arr, $element) as $key) {

                unset($arr[$key]);
            }
            $arr = array_values($arr);
            $num = array_search($element, $arr);
            break;
        case "Insert":
            $element = intval($tokens[1]);
            $position = intval($tokens[2]);

            if ($position >= 0 && $position <= count($arr)) {
                array_splice($arr, $position, 0, $element);
            }
            break;
    }

    $line = readline();
}
$newArr = [];

if ($line == "Odd") {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 == 1) {
            $newArr[] = $arr[$i];
        }
    }
    echo implode(" ", $newArr);
} elseif ($line == "Even") {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 == 0) {
            $newArr[] = $arr[$i];
        }
    }
    echo implode(" ", $newArr);
}
