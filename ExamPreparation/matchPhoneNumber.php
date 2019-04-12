<?php

$pattern = '/\+([359]+)([- ])2(\2)(\d{3})(\2)(\d{4})\b/';
$input = readline();

preg_match_all($pattern, $input, $matches);
echo implode(", ", $matches[0]);
