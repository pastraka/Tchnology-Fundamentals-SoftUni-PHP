<?php

$pattern = '/\b(?<day>\d{2})(?<delimiter>[-.\/])(?<month>[A-Z][a-z]{2})(\k<delimiter>)(?<year>\d{4})\b/m';
$input = readline();
preg_match_all($pattern, $input, $matches);

for ($i = 0; $i < count($matches['day']); $i++) {
    echo "Day: " . $matches['day'][$i] . ', ' .
        "Month: " . $matches['month'][$i] . ', ' .
        "Year: " . $matches['year'][$i] . PHP_EOL;
}