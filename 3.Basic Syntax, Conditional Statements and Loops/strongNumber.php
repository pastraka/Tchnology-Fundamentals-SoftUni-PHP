<?php
$input = intval(readline());
$current = $input;
$number = array();

while ($current > 0) {

    array_push($number, $current % 10);
    $current = floor($current / 10);
}
$number = array_reverse($number);

$sum = 0;

foreach ($number as $num) {
    $factorial = $num;

    for ($i = $factorial - 1; $i >= 1; $i--) {
        $factorial *= $i;
    }
    if ($factorial == 0) {
        $sum += $factorial + 1;
    }
    $sum += $factorial;
}

if ($sum == $input) {
    echo "yes" . PHP_EOL;
} else {
    echo "no" . PHP_EOL;
}