<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 11.10.2018 г.
 * Time: 18:27
 */
$arr = array_map('intval', explode(" ", readline()));

$start = 0;
$count = 0;
$bestLength = 0;

for ($i = 0; $i < count($arr) - 1; $i++) {

    if ($arr[$i] === $arr[$i + 1]) {

        $count++;

        if ($count > $bestLength) {

            $start = $i - $count;
            $bestLength = $count;
        }
    } else {

        $count = 0;
    }

}
for ($i = $start + 1; $i <= $start + $bestLength + 1; $i++) {

    echo $arr[$i] . " ";
}