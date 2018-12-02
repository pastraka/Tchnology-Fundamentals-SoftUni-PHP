<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 8.10.2018 г.
 * Time: 18:27
 */

$input = explode(" ", readline());

for ($i = 0; $i < count($input) / 2; $i++) {
    $j = count($input) - $i - 1;
    $oldElements = $input[$i];
    $input[$i] = $input[$j];
    $input[$j] = $oldElements;
}
$reversed = implode(" ", $input);

echo $reversed;