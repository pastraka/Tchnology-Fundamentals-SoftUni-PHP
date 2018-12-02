<?php

$input = explode(", ", readline());
$towns = [];

for ($i = 0; $i < count($input); $i += 2) {

    if (!isset($towns[$input[$i]])) {

        $towns[$input[$i]] = 0;
        $incomes = intval($input[$i + 1]);
        $towns[$input[$i]] += $incomes;
    }else{
        $incomes = intval($input[$i + 1]);
        $towns[$input[$i]] += $incomes;
    }
}

foreach ($towns as $key => $value) {

    echo "$key => $value" . PHP_EOL;
}