<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.10.2018 г.
 * Time: 10:40
 */
$input = readline();

chars($input);

function chars(string $text): void
{
    $length = strlen($text);

    if ($length % 2 == 1) {
        $index = intval($length / 2);
        echo $text[$index];
    } else {
        $index = intval($length / 2);
        echo $text[$index - 1] . $text[$index];
    }
}