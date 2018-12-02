<?php

$arr = array_map("intval", explode(" ", readline()));
$leftArr = [];
$rightArr = [];

for ($i = 0; $i < count($arr) / 2 - 1; $i++) {
    $leftArr[] = $arr[$i];
}
for ($j = count($arr) - 1; $j >= count($arr) / 2; $j--) {
    $rightArr[] = $arr[$j];
}

$sumLeft = 0;
$sumRight = 0;

for ($k = 0; $k < count($leftArr); $k++) {

    if ($leftArr[$k] == 0) {
        $sumLeft = $sumLeft * 0.80;
    }
    if ($rightArr[$k] == 0) {
        $sumRight = $sumRight * 0.80;
    }
    $sumLeft += $leftArr[$k];
    $sumRight += $rightArr[$k];
}

if ($sumRight > $sumLeft) {
    echo "The winner is left with total time: $sumLeft";
} else {
    echo "The winner is right with total time: $sumRight";
}