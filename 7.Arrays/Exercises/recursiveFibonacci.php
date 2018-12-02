<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 20.10.2018 г.
 * Time: 09:36
 */
function fibRec($n)
{
    if ($n == 0) {
        return 0;
    }
    elseif ($n <= 2) {
        return 1;
    } else {
        $sum = fibRec($n - 1) + fibRec($n - 2);
        return $sum;
    }

}

$fib = fibRec(readline());
echo $fib;