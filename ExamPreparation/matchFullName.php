<?php

$pattern = "/\b[A-Z][a-z]+ [A-Z][a-z]+\b/";
$input = readline();
preg_match_all($pattern, $input, $matches);

foreach ($matches as $index => $match) {
    echo implode(" ", $match);
}