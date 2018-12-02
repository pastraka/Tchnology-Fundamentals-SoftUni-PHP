<?php

$group = intval(readline());
$typeOfGroup = readline();
$day = readline();
$price = 0;
$totalPrice = 0;
$discount = 0;

if ($typeOfGroup == "Students") {
    if ($day == "Friday") {
        $price = $group * 8.45;
    } else if ($day == "Saturday") {
        $price = $group * 9.80;
    } else if ($day == "Sunday") {
        $price = $group * 10.46;
    }
    if ($group >= 30) {
        $totalPrice = $price - ($price * 0.15);
    } else {
        $totalPrice = $price;
    }
} else if ($typeOfGroup == "Business") {
    if ($day == "Friday") {
        $price = $group * 10.90;
        $discount = 10 * 10.90;
    } else if ($day == "Saturday") {
        $price = $group * 15.60;
        $discount = 10 * 15.60;
    } else if ($day == "Sunday") {
        $price = $group * 16;
        $discount = 10 * 16;
    }
    if ($group >= 100) {
        $totalPrice = $price - $discount;
    } else {
        $totalPrice = $price;
    }
} else if ($typeOfGroup == "Regular") {
    if ($day == "Friday") {
        $price = $group * 15;
    } else if ($day == "Saturday") {
        $price = $group * 20;
    } else if ($day == "Sunday") {
        $price = $group * 22.50;
    }
    if ($group >= 10 && $group <= 20) {
        $totalPrice = $price - ($price * 0.05);
    } else {
        $totalPrice = $price;
    }
}

echo "Total price: " . number_format((float)$totalPrice, 2, '.', '');
