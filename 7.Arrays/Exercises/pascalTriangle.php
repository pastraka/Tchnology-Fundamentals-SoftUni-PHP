<?php

$n = intval(readline());
$number = array(array(1),);

for ($i = 1; $i < $n; $i++) {

    $prev = count($number[$i - 1]);

    for ($j = 0; $j <= $prev; $j++) {
        $number[$i][$j] = ((isset($number[$i - 1][$j - 1]) ? $number[$i - 1][$j - 1] : 0) + (isset($number[$i - 1][$j]) ? $number[$i - 1][$j] : 0));
    }
}

for ($i = 0; $i < count($number); $i++) {

    for ($j = 0; $j <= count($number[$i]); $j++) {
        if (isset($number[$i][$j])) {
            echo $number[$i][$j] . " ";
        } else {
            echo "\n";
        }
    }
}

