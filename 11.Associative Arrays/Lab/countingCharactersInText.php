<?php

$text = readline();
$letters = [];

for ($i = 0; $i < strlen($text); $i++) {

    $char = $text[$i];
    if (!key_exists($char, $letters)) {
        $letters[$char] = 0;
    }
    $letters[$char]++;
}

foreach ($letters as $index => $letter) {

    echo "$index -> $letter" . PHP_EOL;
}
