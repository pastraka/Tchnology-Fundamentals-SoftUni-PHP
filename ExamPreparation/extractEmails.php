<?php

$pattern = '/(?<= )[A-Za-z0-9]+([.\-_][A-Z-a-z0-9]+)*@[A-Za-z]+([\-A-Za-z]+)*(\.[A-Za-z]+)+/';
$input = readline();
preg_match_all($pattern, $input, $matches);
echo implode("\n", $matches[0]);