<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 5.11.2018 г.
 * Time: 17:48
 */

$arr = explode(" ", readline());
$result = [];

for ($i = 0; $i < count($arr); $i++) {
    $num = $arr[$i];
    if (!key_exists($num, $result)) {
        $result[$num] = 0;
    }
    $result[$num]++;
}

ksort($result);

foreach ($result as $index => $item) {

    echo "$index -> $item" . PHP_EOL;
}