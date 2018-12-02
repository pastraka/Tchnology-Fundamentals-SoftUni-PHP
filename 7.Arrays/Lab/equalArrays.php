<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 8.10.2018 г.
 * Time: 19:04
 */
$arrOne = array_map('intval', explode(" ", readline()));
$arrTwo = array_map('intval', explode(" ", readline()));
$i = 0;
$index = 0;
$sum = 0;

while ($i < count($arrOne)) {
    if ($arrOne[$i] === $arrTwo[$i]) {
        $sum += $arrOne[$i];
        $index++;
    } else {
        echo "Arrays are not identical. Found difference at $index index.";
        return;
    }
    $i++;
}
echo "Arrays are identical. Sum: $sum";
