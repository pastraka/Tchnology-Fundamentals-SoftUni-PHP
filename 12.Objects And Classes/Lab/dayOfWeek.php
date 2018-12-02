<?php

$input = readline();

$date = new DateTime($input);
echo $date->format('l') . PHP_EOL;