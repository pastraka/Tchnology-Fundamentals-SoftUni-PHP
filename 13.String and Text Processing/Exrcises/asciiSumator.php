<?php

$char1 = readline();
$char2 = readline();
$start = ord($char1) < ord($char2) ? $char1 : $char2;
$end = ord($char1) < ord($char2) ? $char2 : $char1;

$line = readline();
$sum = 0;
$arr = str_split($line);

for ($i = ord($start) + 1; $i < ord($end); $i++) {

    for ($j = 0; $j < strlen($line); $j++) {
        if ($i == ord($arr[$j])) {
            $sum += $i;
        }
    }
}

echo $sum;