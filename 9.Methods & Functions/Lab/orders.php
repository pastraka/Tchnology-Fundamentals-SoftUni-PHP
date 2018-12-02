<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 10:43
 */

$input = readline();
$num = floatval(readline());

$result = totalPrice($input, $num);

echo sprintf("%0.2f", $result);

//coffee, coke, water, snacks
//1.50,   1.40, 1.00,   2.00

function totalPrice($product, $quantity)
{

    switch ($product) {

        case "coffee":
            return $quantity * 1.50;
            break;
        case "coke":
            return $quantity * 1.40;
            break;
        case "water":
            return $quantity * 1.00;
            break;
        case "snacks":
            return $quantity * 2.00;
            break;
    }
    return totalPrice($product, $quantity);
}