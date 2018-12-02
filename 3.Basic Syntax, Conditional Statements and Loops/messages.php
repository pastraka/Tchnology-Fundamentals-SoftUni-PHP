<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 2.10.2018 г.
 * Time: 21:01
 */
$nums = intval(readline());
$result = "";

for ($i = 1; $i <= $nums; $i++) {
    $input = intval(readline());
    $result .= numToAlphabet($input);

}
echo $result . PHP_EOL;

function numToAlphabet($num)
{
    $digit = strlen($num);
    $mainDigit = $num % 10;
    $offset = ($mainDigit - 2) * 3;

    switch ($mainDigit) {
        case 8:
        case 9:
            $offset += 1;
            break;
    }
    $index = $offset + $digit - 1;
    if ($index == -6) {

        return chr(32);
    } else {
        return chr(97 + $index);
    }
}