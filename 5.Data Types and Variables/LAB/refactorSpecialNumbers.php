<?php
$n = intval(readline());
$bool = false;

for ($i = 1; $i <= $n; $i++) {
    $sum = 0;
    $digit = $i;

    while ($digit > 0) {
        $sum += $digit % 10;
        $digit = $digit / 10;
    }

    $bool = ($sum == 5) || ($sum == 7) || ($sum == 11);
    $isTrue = $bool ? "True" : "False";

    echo sprintf("%d -> %s", $i, $isTrue) . PHP_EOL;
}
