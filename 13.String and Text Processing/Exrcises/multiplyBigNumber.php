<?php

$first = readline();
$second = readline();

$len = strlen($first);
$result = "";
$reminder = 0;

if ($second == 0)
    die("0");

for ($i = $len - 1; $i >= 0; $i--) {

    $digit = $first[$i];
    $multiply = $digit * $second + $reminder;
    $reminder = 0;

    if ($multiply > 9) {

        $reminder = floor($multiply / 10);
        $multiply = $multiply % 10;
    }
    if (strlen($result) < 1) {

        $result = $multiply;
    } else {

        $result .= $multiply;
    }
}

if ($reminder > 0) {

    $result .= $reminder;
}

echo strrev($result);