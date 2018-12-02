<?php

$input = readline();
$arr = [];

while (true) {
    if ($input == "stop") {
        break;
    }

    if (!key_exists($input, $arr)) {

        $arr[$input] = 0;
    }

    $carats = intval(readline());
    $arr[$input] += $carats;

    $input = readline();
}

foreach ($arr as $index => $item) {
    echo $index . " -> " . $item . "K" . PHP_EOL;
}

