<?php
$number = intval(readline());
$current = 0;
if ($number % 2 == 0) {
    $current = 2;
}
if ($number % 3 == 0) {
    $current = 3;
}
if ($number % 6 == 0) {
    $current = 6;
}
if ($number % 7 == 0) {
    $current = 7;
}
if ($number % 10 == 0) {
    $current = 10;
}
if ($current == 0) {
    echo "Not divisible";
} else {

    echo "The number is divisible by $current";
}
