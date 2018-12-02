<?php

$input = readline();
$companies = [];

while (true) {
    if ($input == "End") {
        break;
    }
    $tokens = explode(" -> ", $input);
    $company = $tokens[0];
    $employeeId = $tokens[1];
    if (!key_exists($company, $companies)) {
        $companies[$company] = [];
    }
    if (!in_array($employeeId, $companies[$company])) {
        $companies[$company][] = $employeeId;
    }

    $input = readline();
}
ksort($companies);

foreach ($companies as $index => $company) {
    echo $index . PHP_EOL;

    foreach ($company as $item) {
        echo "-- $item" . PHP_EOL;
    }
}