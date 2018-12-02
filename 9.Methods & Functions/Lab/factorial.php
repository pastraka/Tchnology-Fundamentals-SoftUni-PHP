<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 11:27
 */

$num = intval(readline());

$result = function ($n) {

    if ($n < 2) {
        return 1;
    }

    $fact = 1;

    for ($i = 2; $i <= $n; $i++) {
        $fact = bcmul($fact, $i);
    }
    return $fact;

};

echo $result($num);
