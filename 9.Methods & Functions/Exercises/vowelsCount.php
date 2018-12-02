<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 22.10.2018 г.
 * Time: 17:52
 */

$input = readline();

echo countVowels($input);

function countVowels(string $text): int
{
    $count = 0;
    $text = strtolower($text);
    $text = str_split($text);

    //A, E, I, O, U, Y

    for ($i = 0; $i < count($text); $i++) {
        if ($text[$i] == "a" || $text[$i] == "e" || $text[$i] == "i" || $text[$i] == "o" || $text[$i] == "u" || $text[$i] == "y") {
            $count++;
        }
    }
    return $count;
}