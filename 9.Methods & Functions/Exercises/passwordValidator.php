<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 22.10.2018 г.
 * Time: 18:25
 */

$input = readline();

foreach (validPassword($input) as $result) {
    echo $result . PHP_EOL;
}

function validPassword($pass)
{
    $length = passLength($pass);
    $letterAndDigits = lettersAndDigits($pass);
    $digits = twoDigits($pass);
    $output = [];

    if (!$length) {
        $output[] = "Password must be between 6 and 10 characters";
    }
    if (!$letterAndDigits) {
        $output[] = "Password must consist only of letters and digits";
    }
    if (!$digits) {
        $output[] = "Password must have at least 2 digits";
    }
    if ($length && $letterAndDigits && $digits) {
        $output[] = "Password is valid";
    }

    return $output;
}

function passLength($pass)
{
    if (strlen($pass) >= 6 && strlen($pass) <= 10) {
        return true;
    } else {
        return false;
    }
}

function lettersAndDigits($pass)
{
    $pass = str_split($pass);
    $valid = 0;
    $inValid = 0;

    for ($i = 0; $i < count($pass); $i++) {

        if (ord($pass[$i]) >= 48 && ord($pass[$i]) <= 57 || ord($pass[$i]) >= 65 && ord($pass[$i]) <= 90 || ord($pass[$i]) >= 97 && ord($pass[$i]) <= 122) {
            $valid++;
        } else {
            $inValid++;
        }
    }
    if ($inValid == 0) {
        return true;
    } else {
        return false;
    }
}

function twoDigits($pass)
{
    $pass = str_split($pass);
    $count = 0;

    for ($i = 0; $i < count($pass); $i++) {
        if (ord($pass[$i]) >= 48 && ord($pass[$i]) <= 57) {
            $count++;
        }
    }
    if ($count >= 2) {
        return true;
    } else {
        return false;
    }
}