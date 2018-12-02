<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 29.10.2018 г.
 * Time: 17:28
 */

$num = intval(readline());
$line = readline();

$guestList = [];

while ($num > 0) {
    $tokens = explode(" ", $line);
    $length = count($tokens);

    if ($length == 3) {
        $name = $tokens[0];
        if (in_array($name, $guestList) == false) {
            $guestList[] = $name;
        } else {
            echo "$name is already in the list!" . PHP_EOL;
        }
    } elseif ($length == 4) {
        $name = $tokens[0];
        $index = array_search($name, $guestList);
        if (array_search($name, $guestList)) {
            unset($guestList[$index]);
        } else {
            echo "$name is not in the list!" . PHP_EOL;
        }
    }

    $num--;
    $line = readline();
}

foreach ($guestList as $name) {
    echo $name . PHP_EOL;
}