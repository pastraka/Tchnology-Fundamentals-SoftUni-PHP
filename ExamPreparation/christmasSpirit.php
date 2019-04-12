<?php

$quantity = intval(readline());
$days = intval(readline());

$ornamentSet = 2;
$treeSkirt = 5;
$treeGarlands = 3;
$treeLights = 15;
$totalCost = 0;
$totalSpirit = 0;

for ($i = 1; $i <= $days; $i++) {
    if ($i % 2 == 0) {
        $totalCost += $ornamentSet * $quantity;
        $totalSpirit += 5;
    }
    if ($i % 3 == 0) {
        $totalCost += ($treeSkirt * $quantity) + ($treeGarlands * $quantity);
        $totalSpirit += 15;
    }
    if ($i % 5 == 0) {
        $totalCost += $treeLights * $quantity;
        $totalSpirit += 17;
        if ($i % 3 == 0) {
            $totalSpirit += 30;
        }
    }
    if ($i % 10 == 0) {
        $totalSpirit -= 20;
    }
    if ($i % 11 == 0) {
        $totalCost += ($treeLights * ($quantity + 2)) + ($treeSkirt * ($quantity + 2)) + ($treeGarlands * ($quantity + 2));
    }
}

if ($days % 10 == 0) {
    $totalSpirit -= 30;
}

echo "Total cost: {$totalCost}" . PHP_EOL;
echo "Total spirit: {$totalSpirit}" . PHP_EOL;
