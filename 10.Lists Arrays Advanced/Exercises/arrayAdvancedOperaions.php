<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 29.10.2018 г.
 * Time: 18:10
 */

$arr = array_map('intval', explode(" ", readline()));
$line = readline();

while (true) {

    if ($line == "End"){
        break;
    }

    $tokens = explode(" ", $line);
    $command = $tokens[0];

    switch ($command) {
        case "Add":
            $number = intval($tokens[1]);
            $arr[] = $number;
            break;
        case "Insert":
            $number = intval($tokens[1]);
            $position = intval($tokens[2]);
            if ($position >= 0 && $position < count($arr)) {
                array_splice($arr, $position, 0, $number);
                $arr = array_values($arr);
            }else{
                echo "Invalid index".PHP_EOL;
            }
            break;
        case "Remove":
            $index = intval($tokens[1]);
            if ($index >= 0 && $index < count($arr)) {
                array_splice($arr, $index, 1);
                $arr = array_values($arr);
            }else{
                echo "Invalid index".PHP_EOL;
            }
            break;
        case "Shift":
            $direction = $tokens[1];
            $count = intval($tokens[2]);

            if ($direction == "left") {

                for ($i = 0; $i < $count; $i++) {
                    $current = array_shift($arr);
                    array_push($arr, $current);
                    $arr = array_values($arr);
                }
            } elseif ($direction == "right") {

                for ($i = 0; $i < $count; $i++){
                    $current = $arr[count($arr) - 1];
                    array_pop($arr);
                    array_unshift($arr, $current);
                    $arr = array_values($arr);
                }
            }
            break;
    }

    $line = readline();
}

echo implode(" ", $arr);