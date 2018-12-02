<?php

$input = readline();
$arr = [];

for ($i = 0; $i < strlen($input); $i++) {
    $current = $input[$i];

    if (!key_exists($current, $arr)) {
        $arr[$current] = [];
    }
    $arr[$current][] = $i;
}

foreach ($arr as $index => $item) {
    echo $index . ":" . implode("/", $item) . PHP_EOL;
}