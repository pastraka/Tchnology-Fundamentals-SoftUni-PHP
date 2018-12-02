<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.10.2018 г.
 * Time: 22:00
 */
$input = readline();
$char = ord($input); // вземане на ascii кода на дадена буква
if ($char >= 65 && $char <= 90) {
    echo "upper-case";
} elseif ($char >= 97 && $char <= 122) {
    echo "lower-case";
}