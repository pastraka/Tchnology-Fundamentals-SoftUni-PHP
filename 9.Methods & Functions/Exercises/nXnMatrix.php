<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 23.10.2018 г.
 * Time: 11:40
 */

$int = intval(readline());

printMatrix($int);

function printMatrix(int $num): void
{
    for ($i = 0; $i < $num; $i++) {

        for ($j = 0; $j < $num; $j++) {
            echo $num . " ";
        }
        echo PHP_EOL;
    }
}