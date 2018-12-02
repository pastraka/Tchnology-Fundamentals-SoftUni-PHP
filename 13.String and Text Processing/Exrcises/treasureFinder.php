<?php

$numbers = array_map('intval', explode(" ", readline()));
$line = readline();

while (true) {
    $count = -1;
    if ($line == "find") {
        break;
    }
    $arr = str_split($line);

    for ($i = 0, $j = 0; $i < count($arr); $i++, $j++) {
        $count++;

        if ($count == count($numbers)) {
            $j = 0;
            $count = 0;
        }
        $current = ord($arr[$i]);
        $current -= $numbers[$j];
        $arr[$i] = chr($current);
    }
    $treasure = "";
    $coordinates = "";
    $counter = 1;

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] == "&") {

            do {

                $treasure .= $arr[$i + $counter];
                $counter++;

            } while ($arr[$i + $counter] != "&");

            $i += $counter;
            $counter = 1;
        }

        if ($arr[$i] == "<") {

            do {

                $coordinates .= $arr[$i + $counter];
                $counter++;

            } while ($arr[$i + $counter] != ">");

            $i += $counter;
            $counter = 1;
        }
    }
    echo "Found $treasure at $coordinates" . PHP_EOL;
    $line = readline();
}

//<?php
//$key = preg_split('/\s+/', readline());
//$strings = [];
//while (($input = readline()) != "find") {
//    for ($j = 0; $j < count($key); $j++) {
//        for ($i = 0; $i < strlen($input); $i++) {
//            $input[$i] = chr(ord($input[$i]) - $key[$j]);
//            if (isset($key[$j + 1])) {
//                $j++;
//            } else {
//                $j = 0;
//            }
//        }
//        array_push($strings, $input);
//        break;
//    }
//}
//foreach ($strings as $output) {
//    $dollarStart = strpos($output, "&");
//    $dollarEnd = strrpos($output, "&");
//    $coordStart = strpos($output, "<");
//    $coordEnd = strpos($output, ">");
//    echo "Found " . substr($output, $dollarStart + 1, $dollarEnd - $dollarStart - 1) .
//        " at " . substr($output, $coordStart + 1, $coordEnd - $coordStart - 1) . PHP_EOL;
//}