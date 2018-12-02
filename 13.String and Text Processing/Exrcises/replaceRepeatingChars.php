<?php

$input = readline();
$result = "";

for ($i = 0; $i < strlen($input) - 1; $i++) {
    $current = $input[$i];
    $next = $input[$i + 1];
    if ($current != $next) {
        $result .= $current;
    }
}

echo $result . $input[strlen($input) - 1];