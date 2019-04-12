<?php

$dishes = '/[<][a-z0-9]+[>]/m';
$house = '/[[][A-Z0-9]+[]]/m';
$laundry = '/[{].+[}]/m';
$input = readline();
$totalDishes = 0;
$totalHouse = 0;
$totalLaundry = 0;
$totalTime = 0;

while (true) {
    if ($input == "wife is happy") {
        break;
    }
    if (preg_match($dishes, $input, $matches)) {
        if (preg_match_all('/[0-9]/', $matches[0], $result)) {
            $totalDishes += array_sum($result[0]);
        }
    }
    if (preg_match($house, $input, $matches)) {
        if (preg_match_all('/[0-9]/', $matches[0], $result)) {
            $totalHouse += array_sum($result[0]);
        }
    }
    if (preg_match($laundry, $input, $matches)) {
        if (preg_match_all('/[0-9]/', $matches[0], $result)) {
            $totalLaundry += array_sum($result[0]);
        }
    }

    $input = readline();
}

$totalTime = $totalDishes + $totalHouse + $totalLaundry;

echo "Doing the dishes - $totalDishes min." . PHP_EOL;
echo "Cleaning the house - $totalHouse min." . PHP_EOL;
echo "Doing the laundry - $totalLaundry min." . PHP_EOL;
echo "Total - $totalTime min.";