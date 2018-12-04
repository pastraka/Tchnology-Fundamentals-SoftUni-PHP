<?php

$input = readline();
$tokens = explode(" ", readline());
$search = $tokens[0];
$replace = $tokens[1];
$decrypted = "";

if (preg_match("/^[d-z{}#|]+$/", $input)) {

    for ($i = 0; $i < strlen($input); $i++) {
        $decrypted .= chr(ord($input[$i]) - 3);
    }
    $output = str_replace($search, $replace, $decrypted);
    echo $output;
} else {
    echo "This is not the book you are looking for.";
}
