<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 22.10.2018 г.
 * Time: 18:02
 */

$char1 = readline();
$char2 = readline();

printCharsInRange($char1, $char2);

function printCharsInRange(string $ch1, string $ch2): void
{
    $result = "";
    if (ord($ch1) < ord($ch2)) {

        for ($i = ord($ch1); $i < ord($ch2) - 1; $i++) {
            $result .= chr($i + 1) . " ";
        }
    } else {
        for ($i = ord($ch2); $i < ord($ch1) - 1; $i++) {
            $result .= chr($i + 1) . " ";
        }
    }

    echo $result;
}