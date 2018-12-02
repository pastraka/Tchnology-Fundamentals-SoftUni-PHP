<?php

$remove = readline();
$text = readline();

while (strpos($text, $remove)) {

    $text = str_replace($remove, "", $text);
}

echo $text;