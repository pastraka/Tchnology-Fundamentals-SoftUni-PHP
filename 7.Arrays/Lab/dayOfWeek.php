<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 7.10.2018 г.
 * Time: 10:24
 */
$input = intval(readline());
$day = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

if ($input >= 1 && $input <= 7) {
    echo $day[$input - 1];
} else {
    echo "Invalid Day!";
}
