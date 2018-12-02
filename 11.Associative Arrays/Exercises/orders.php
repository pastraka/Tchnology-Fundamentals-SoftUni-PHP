<?php

$input = readline();
$prices = [];
$qtny = [];

while (true) {
    if ($input == "buy") {
        break;
    }
    $tokens = explode(" ", $input);
    $product = $tokens[0];
    $price = floatval($tokens[1]);
    $quantity = intval($tokens[2]);

    if (!key_exists($product, $prices) && !key_exists($product, $qtny)) {
        $prices[$product] = $price;
        $qtny[$product] = $quantity;
    } else {
        $prices[$product] = $price;
        $qtny[$product] += $quantity;
    }

    $input = readline();
}

foreach ($prices as $product => $price) {
    $totalPrice = $price * $qtny[$product];
    printf("%s -> %.2f\n", $product, $totalPrice);
}