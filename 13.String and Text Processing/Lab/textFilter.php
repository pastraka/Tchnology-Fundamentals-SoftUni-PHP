<?php

$bannedList = explode(", ", readline());
$text = readline();

for ($i = 0; $i < count($bannedList); $i++) {

    $current = $bannedList[$i];
    $replace = str_repeat("*", strlen($current));
    $text = str_replace($current, $replace, $text);
}
echo $text;

