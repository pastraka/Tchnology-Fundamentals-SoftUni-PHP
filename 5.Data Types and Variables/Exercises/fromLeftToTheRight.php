<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 5.10.2018 г.
 * Time: 19:31
 */
$n = intval(readline());
$sum = 0;

for ($i = 0; $i < $n; $i++) {
    $line = explode(" ", readline());
    $num1 = ($line[0]);
    $num2 = ($line[1]);

    if ($num1 > $num2) {
        $numLength = strlen($num1);
        $num1 = str_split($num1);

        for ($j = 0; $j < $numLength; $j++) {
            @$sum += $num1[$j];
        }
    } else {
        $numLength = strlen($num2);
        $num2 = str_split($num2);
        for ($k = 0; $k < $numLength; $k++) {
            @$sum += $num2[$k];
        }
    }
    echo $sum . PHP_EOL;
    $sum = 0;
}
