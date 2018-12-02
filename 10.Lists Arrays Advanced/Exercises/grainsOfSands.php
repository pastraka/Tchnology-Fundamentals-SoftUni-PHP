<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 2.11.2018 г.
 * Time: 12:34
 */

$arr = array_map('intval', explode(" ", readline()));
$line = readline();

while (true) {
    if ($line == "Mort") {
        break;
    }

    $tokens = explode(" ", $line);
    $command = $tokens[0];

    switch ($command) {
        case "Add":
            $value = intval($tokens[1]);
            $arr[] = $value;
            break;
        case "Remove":
            $value = intval($tokens[1]);
            if (in_array($value, $arr)) {
                $index = array_search($value, $arr);
                unset($arr[$index]);
                $arr = array_values($arr);
                //array_splice($arr, $index, 1);
            } elseif ($value >= 0 && $value < count($arr)) {
                unset($arr[$value]);
                $arr = array_values($arr);
            }
            break;
        case "Replace":
            $value = intval($tokens[1]);
            $replacement = intval($tokens[2]);
            if (in_array($value, $arr)) {
                $index = array_search($value, $arr);
                array_splice($arr, $index, 1, $replacement);
            }
            break;
        case "Increase":
            $value = $tokens[1];

            for ($i = 0; $i < count($arr); $i++) {
                $isTrue = true;
                if ($arr[$i] >= $value) {
                    $value = $arr[$i];
                    $isTrue = false;
                    break;
                }
            }
            if ($isTrue == true) {

                $value = $arr[count($arr) - 1];
            }

            for ($i = 0; $i < count($arr); $i++) {
                $arr[$i] += $value;
            }
            break;
        case "Collapse":
            $value = intval($tokens[1]);

            foreach (array_keys($arr) as $key){
                if ($key < $value){
                    unset($key);
                }
            }
            //$arr = array_values($arr);
            break;
    }
    $line = readline();
}

echo implode(" ", $arr);