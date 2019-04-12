<?php

$input = readline();
$arr = [];

for ($i = 102; $i <= $input; $i++) {
    if (strlen($i) >= 4) {
        break;
    }

    $num1 = intval($i % 10);
    $num2 = intval(($i / 10) % 10);
    $num3 = intval($i / 100);

    if ($num1 != $num2 && $num1 != $num3 && $num2 != $num3) {
        array_push($arr, $i);
    }
}

if (count($arr) > 0) {
    echo implode(", ", $arr);
} else {
    echo "no";
}



