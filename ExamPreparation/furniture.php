<?php

$arr = [];
$totalSpend = 0;
$input = readline();

while (true) {
    if ($input == "Purchase") {
        break;

    }
    preg_match_all('/(?<=>>)[A-Z]+([a-z]+)?(?=<<)/', $input, $names, PREG_SET_ORDER, 0);
    foreach ($names as $name) {
        $furniture = $name[0];
    }

    $furniturePrice = 0.0;
    preg_match_all('/(?<=<<)[\d]+(\.)*([\d]+)*(?=!)/', $input, $prices, PREG_SET_ORDER, 0);
    foreach ($prices as $price) {
        $furniturePrice = floatval($price[0]);
    }

    $furnitureQty = 0;
    preg_match_all('/(?<=!)[\d]+(?=\n)*/', $input, $qtys, PREG_SET_ORDER, 0);
    foreach ($qtys as $qty) {
        $furnitureQty = intval($qty[0]);
    }

    if (!empty($furniture) && $furniturePrice != 0 && $furnitureQty != 0) {
        $totalSpend += ($furnitureQty * $furniturePrice);
        $arr[] = $furniture;
    }

    $input = readline();
}

echo "Bought furniture:" . PHP_EOL;
foreach ($arr as $item) {
    echo $item . PHP_EOL;
}
echo sprintf("Total money spend: %0.2f", $totalSpend);
