<?php

$num = intval(readline());
$parking = [];

for ($i = 0; $i < $num; $i++) {
    $input = explode(" ", readline());
    $command = $input[0];

    switch ($command) {
        case "register":
            $userName = $input[1];
            $licensePlateNum = $input[2];
            if (!key_exists($userName, $parking)) {
                $parking[$userName] = $licensePlateNum;
                echo "$userName registered $licensePlateNum successfully" . PHP_EOL;
            } else {
                echo "ERROR: already registered with plate number $licensePlateNum" . PHP_EOL;
            }
            break;
        case "unregister":
            $userName = $input[1];
            if (key_exists($userName, $parking)) {
                echo "{$userName} unregistered successfully" . PHP_EOL;
                unset($parking[$userName]);
                //$parking = array_values($parking);
            } else {
                echo "ERROR: user {$userName} not found" . PHP_EOL;
            }
            break;
    }
}

foreach ($parking as $key => $item) {
    echo $key . " => " . $item . PHP_EOL;
}