<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 21.10.2018 г.
 * Time: 11:24
 */

$num = floatval(readline());
$power = floatval(readline());

echo calculate($num, $power);

function calculate($n, $p)
{
    return floatval(pow($n, $p));
}
