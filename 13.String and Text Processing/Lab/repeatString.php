<?php

$word = explode(" ", readline());

foreach ($word as $item) {

    $length = strlen($item);
    echo str_repeat($item, $length);
}