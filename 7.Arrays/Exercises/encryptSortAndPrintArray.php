<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 15.10.2018 г.
 * Time: 11:41
 */
$number = intval(readline());
$sumVowel = 0;
$sumConsonant = 0;
$result = 0;
$arr = [];

while ($number > 0) {
    $sumVowel = 0;
    $sumConsonant = 0;

    $name = readline();

    for ($i = 0; $i < strlen($name); $i++) {
        $length = strlen($name);

        if ($name[$i] == "A" || $name[$i] == "E" || $name[$i] == "I" || $name[$i] == "O" || $name[$i] == "U" || $name[$i] == "e" || $name[$i] == "i" || $name[$i] == "o" || $name[$i] == "u" || $name[$i] == "a") {
            $sumVowel += ord($name[$i]) * $length;
        } else {
            $sumConsonant += intval(ord($name[$i]) / $length);
        }


    }

    $result = $sumVowel + $sumConsonant;
    $arr[$number] = $result;

    $number--;

}

sort($arr);

foreach ($arr as $sum) {
    echo $sum . PHP_EOL;
}
