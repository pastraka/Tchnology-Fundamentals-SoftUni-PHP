<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 6.10.2018 г.
 * Time: 16:56
 */
$input = readline();

while ($input != "END") {
    if ($dataType = filter_var($input, FILTER_VALIDATE_INT) || $dataType = filter_var($input, FILTER_VALIDATE_INT) === 0) {
        echo "$input is integer type" . PHP_EOL;
    } elseif ($dataType = filter_var($input, FILTER_VALIDATE_BOOLEAN) || $dataType = strtolower($input) == "false") {
        echo "$input is boolean type" . PHP_EOL;
    } elseif ($dataType = filter_var($input, FILTER_VALIDATE_FLOAT) || $dataType = filter_var($input, FILTER_VALIDATE_FLOAT) === 0.0) {
        echo "$input is floating point type" . PHP_EOL;
    } elseif (strlen($input) == 1) {
        echo "$input is character type" . PHP_EOL;
    } else {
        echo "$input is string type" . PHP_EOL;
    }

    $input = readline();
}