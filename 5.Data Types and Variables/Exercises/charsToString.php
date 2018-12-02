<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.10.2018 г.
 * Time: 21:19
 */

$line = readline();
$result = "";

for ($i = 1; $i <= 3; $i++) {

    $result .= $line;

    $line = readline();
}
echo $result;

