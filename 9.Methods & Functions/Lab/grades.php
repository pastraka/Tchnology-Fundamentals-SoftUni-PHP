<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 20.10.2018 г.
 * Time: 17:43
 */
$input = floatval(readline());

echo checkGrade($input);

function checkGrade($int)
{

    switch ($int) {

        case $int >= 2.00 && $int < 3.00:
            return "Fail";
            break;
        case $int >= 3.00 && $int <= 3.49:
            return "Poor";
            break;
        case $int >= 3.50 && $int <= 4.49:
            return "Good";
            break;
        case $int >= 4.50 && $int <= 5.49:
            return "Very good";
            break;
        case $int >= 5.50 && $int <= 6.00:
            return "Excellent";
            break;
    }

    return $int;
}