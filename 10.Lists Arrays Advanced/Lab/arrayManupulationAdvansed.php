<?php

$arr = array_map('intval', explode(" ", readline()));

while (true) {

    $line = readline();

    if ($line == "end") {
        break;
    }
    $tokens = explode(" ", $line);

    switch ($tokens[0]) {
        case "Add":
            $numToAdd = intval($tokens[1]);
            $arr[count($arr)] = $numToAdd;
            break;

        case "Remove":
            $numToRemove = intval($tokens[1]);
            $index = array_search($numToRemove, $arr);
            unset($arr[$index]);
            break;

        case "RemoveAt":
            $indexToRemove = intval($tokens[1]);
            array_splice($arr, $indexToRemove, 1);
            break;

        case "Insert":
            $numberToInsert = intval($tokens[1]);
            $indexToInsert = intval($tokens[2]);
            $firstPart = array_slice($arr, 0, $indexToInsert);
            $addElement = array($numberToInsert);
            $secondPart = array_slice($arr, $indexToInsert);
            $arr = array_merge($firstPart, $addElement, $secondPart);
            break;

        case "Contains":
            $numberToSearch = intval($tokens[1]);
            if (in_array($numberToSearch, $arr)) {
                echo "Yes" . PHP_EOL;
            } else {
                echo "No such number" . PHP_EOL;
            }
            break;
        case "Print":
            $command = $tokens[1];
            if ($command == "even") {
                $evenArr = [];
                for ($i = 0; $i < count($arr); $i++) {
                    if ($arr[$i] % 2 == 0) {
                        $evenArr[] = $arr[$i];
                    }
                }
                echo implode(" ", $evenArr) . PHP_EOL;
                break;
            } elseif ($command == "odd") {
                $oddArr = [];
                for ($i = 0; $i < count($arr); $i++) {

                    if ($arr[$i] % 2 == 1) {
                        $oddArr[] = $arr[$i];
                    }
                }
                echo implode(" ", $oddArr) . PHP_EOL;
            }
            break;
        case "Get":
            $sumArr = [];
            if ($tokens[1] == "sum") {
                $sumArr = array_sum($arr);
                echo $sumArr . PHP_EOL;
            }
            break;
        case "Filter":
            $newArrBig = [];
            $newArrSmall = [];
            $condition = $tokens[1];
            $number = $tokens[2];
            if ($condition == "<") {
                for ($i = 0; $i < count($arr); $i++) {
                    if ($arr[$i] < $number) {
                        $newArrSmall[] = $arr[$i];
                    }
                }
                echo implode(" ", $newArrSmall) . PHP_EOL;

            } elseif ($condition == ">") {
                for ($i = 0; $i < count($arr); $i++) {
                    if ($arr[$i] > $number) {
                        $newArrBig[] = $arr[$i];
                    }
                }
                echo implode(" ", $newArrBig) . PHP_EOL;
            } elseif ($condition == "<=") {
                for ($i = 0; $i < count($arr); $i++) {
                    if ($arr[$i] <= $number) {
                        $newArrSmall[] = $arr[$i];
                    }
                }
                echo implode(" ", $newArrSmall) . PHP_EOL;
            } elseif ($condition == ">=") {
                for ($i = 0; $i < count($arr); $i++) {
                    if ($arr[$i] >= $number) {
                        $newArrBig[] = $arr[$i];
                    }
                }
                echo implode(" ", $newArrBig) . PHP_EOL;
            }
    }
}

echo implode(" ", $arr);