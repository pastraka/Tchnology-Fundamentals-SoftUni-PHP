<?php

$result = [];
while (true) {

    $input = preg_split("/[:|\/]/", readline());
    if ($input[0] == "end") {
        break;
    }

    for ($i = 1; $i < count($input); $i++) {

        $result[$input[$i]] = $input[0];
    }
}

ksort($result);
echo implode("", $result);