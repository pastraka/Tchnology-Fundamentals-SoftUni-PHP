<?php

$numbers1 = intval(readline());
$numbers2 = intval(readline());
$numbers3 = intval(readline());
$arrayNum = array($numbers1, $numbers2, $numbers3);

rsort($arrayNum);

for ($i = 0; $i < count($arrayNum); $i++) {
    echo $arrayNum[$i] . PHP_EOL;
}