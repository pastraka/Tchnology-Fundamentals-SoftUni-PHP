<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 17:31
 */

$input = readline();
$num = intval(readline());

echo repeatString($input, $num);

function repeatString($str, $repetitions)
{
    $concatString = "";

    for ($i = 0; $i < $repetitions; $i++) {
        $concatString .= $str;
    }
    return $concatString;
}