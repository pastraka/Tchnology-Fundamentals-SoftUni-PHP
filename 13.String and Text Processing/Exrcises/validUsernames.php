<?php

$line = explode(", ", readline());

$flag = false;

for ($i = 0; $i < count($line); $i++) {
    $current = $line[$i];

    if (strlen($current) >= 3 && strlen($current) <= 16) {

        for ($j = 0; $j < strlen($current); $j++) {
            $currentLetter = $current[$j];

            $isValid = ctype_alpha($currentLetter) || ctype_digit($currentLetter) || ord($currentLetter) == 95 || ord($currentLetter) == 45;
            if ($isValid) {
                $flag = true;
            } else {
                $flag = false;
                break;
            }
        }
        if ($flag) {
            echo $current . PHP_EOL;
        }
    }
}