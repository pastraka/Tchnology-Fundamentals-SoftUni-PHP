<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.10.2018 г.
 * Time: 13:20
 */

$input = readline();

while ($input != "END") {

    palindrom($input);

    $input = readline();
}

function palindrom(string $line): void
{
    $line = str_split($line);
    $arrLine = $line;

    $arrLine = array_reverse($arrLine);

    if ($line === $arrLine) {
        echo "true" . PHP_EOL;
    } else {
        echo "false" . PHP_EOL;
    }
}