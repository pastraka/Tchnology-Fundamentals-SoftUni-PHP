<?php

$input = explode("|", readline());

$first = $input[0];
$second = $input[1];
$third = $input[2];

$firstPattern = preg_match('/([#$%*&])(?<capital>[A-Z]+)(\1)/m', $first, $match);
$capital = $match["capital"];

for ($i = 0; $i < strlen($capital); $i++) {
    $currentChar = $capital[$i];
    $currentAscii = ord($currentChar);

    $secondPattern = preg_match("/{$currentAscii}:(?<length>[0-9][0-9])/", $second, $match);
    $length = $match["length"];

    $thirdPattern = preg_match("/(?<=\s|^){$currentChar}[^\s]{{$length}}(?=\s|$)/m", $third, $match);
    echo $match[0] . PHP_EOL;
}



