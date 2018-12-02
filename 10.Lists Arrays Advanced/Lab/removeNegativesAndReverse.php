<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 26.10.2018 г.
 * Time: 17:44
 */

$nums = array_map('intval', explode(" ", readline()));
$newArr = [];

for ($i = 0; $i < count($nums); $i++) {

    if ($nums[$i] < 0) {

        continue;

    } else {

        $newArr[] = $nums[$i];
    }
}
if (count($newArr) === 0) {

    echo "empty";
    return;
}

$newArr = array_reverse($newArr);
echo implode(" ", $newArr);
