<?php

$pattern = '/(^|(?<=\s))-?\d+(\.\d+)?($|(?=\s))/';
$input = readline();
preg_match_all($pattern, $input, $matches);
echo implode(" ", $matches[0]);

//print_r($matches);