<?php

$input = readline();
$total = 0;
while (true) {
    if ($input == "end of shift") {
        break;
    }
    $pattern = '/.*%(?<name>[A-Z][a-z]+)%.*<(?<product>\w+)>.*\|(?<count>[0-9]+)\|.*?(?<price>[0-9]+\.?[0-9]+)\$$/';
    if (preg_match($pattern, $input, $matches)) {
        $total += $matches['count'] * $matches['price'];

        printf("%s: %s - %0.2f\n", $matches['name'], $matches['product'], $matches['count'] * $matches['price']);
    }

    $input = readline();
}
echo "Total income: " . sprintf("%0.2f", $total);