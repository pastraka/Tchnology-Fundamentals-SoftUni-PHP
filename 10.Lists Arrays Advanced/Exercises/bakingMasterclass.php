<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.10.2018 г.
 * Time: 09:33
 */

$budget = floatval(readline());
$students = intval(readline());
$floorPrice = floatval(readline());
$eggPrice = floatval(readline());
$apronPrice = floatval(readline());

$floorCount = ceil($students - $students / 5);
$eggCount = $students * 10;
$apronCount = ceil($students * 1.2);

$totalResult = $floorCount * $floorPrice + $eggCount * $eggPrice + $apronCount * $apronPrice;
if ($totalResult <= $budget) {
    echo "Items purchased for " . sprintf("%0.2f", $totalResult) . "$.";
} else {

    echo sprintf("%0.2f", $totalResult - $budget) . "$ more needed.";
}
