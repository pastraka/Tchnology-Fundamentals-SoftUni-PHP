<?php

$input = explode(" ", readline());

$concatText = implode(" ", $input);
$concatText = str_split($concatText);
$encrypted = "";

foreach ($concatText as $ch) {
    $newChar = ord($ch) + 3;
    $encrypted .= chr($newChar);
}
echo $encrypted;