<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 17:36
 */

$firstNum = floatval(readline());
$operator = readline();
$secondNum = floatval(readline());

echo sprintf("%0.2f", mathOperations($firstNum, $operator, $secondNum));

function mathOperations($num1, $operator, $num2)
{
    $result = 0.0;

    switch ($operator) {
        case "/":
            $result = abs($num1 / $num2);
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = abs($num1 - $num2);
            break;
    }
    return $result;
}