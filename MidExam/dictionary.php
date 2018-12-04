<?php
$input = explode(" | ", readline());
$arr = [];
$words = "";
$descriptions = "";

for ($i = 0; $i < count($input); $i++) {

    $tokens = explode(": ", $input[$i]);
    $words = $tokens[0];
    $descriptions = $tokens[1];

    if (!key_exists($words, $arr)) {
        $arr[$words] = [];
    }
    $arr[$words][] = $descriptions;
}

$input = explode(" | ", readline());

for ($i = 0; $i < count($input); $i++) {

    if (key_exists($input[$i], $arr)) {

        echo $input[$i] . PHP_EOL;

        for ($j = 0; $j < count($arr[$words]); $j++) {
            usort($arr[$input[$i]], function ($a, $b) {
                return strlen($b) <=> strlen($a);
            });
            echo "-" . $arr[$words][$j] . PHP_EOL;
        }
    }
}

$input = readline();
if ($input == "End") {
    return;
} elseif ($input == "List") {
    ksort($arr);
    foreach ($arr as $index => $item) {
        echo $index . " ";
    }
}
