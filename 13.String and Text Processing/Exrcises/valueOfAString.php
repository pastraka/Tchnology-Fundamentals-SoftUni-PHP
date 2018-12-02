<?php

$input = readline();
$command = readline();
$result = 0;

for ($i = 0; $i < strlen($input); $i++) {
    if ($command == "UPPERCASE") {
        if (ctype_upper($input[$i])) {
            $result += ord($input[$i]);
        }
    } elseif ($command == "LOWERCASE") {
        if (ctype_lower($input[$i])) {
            $result += ord($input[$i]);
        }
    }
}

echo "The total sum is: {$result}";