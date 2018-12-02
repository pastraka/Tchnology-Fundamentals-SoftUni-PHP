<?php

$text = preg_split("/[ .,?!]/", readline(), null, PREG_SPLIT_NO_EMPTY);
$wordToSearch = readline();
$counter = 0;

for ($i = 0; $i < count($text); $i++) {

    if ($wordToSearch === $text[$i]) {
        $counter++;
    }
}

echo $counter;