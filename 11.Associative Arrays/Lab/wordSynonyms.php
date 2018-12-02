<?php

$num = intval(readline());
$arr = [];

for ($i = 0; $i < $num; $i++) {
    $word = readline();
    $synonym = readline();

    if (!key_exists($word, $arr)) {
        $arr[$word] = [];
    }
    array_push($arr[$word], $synonym);
}

uksort($arr, function ($key1, $key2) use ($arr) {
    $countSynonyms1 = count($arr[$key1]);
    $countSynonyms2 = count($arr[$key2]);

    if ($countSynonyms1 == $countSynonyms2) {
        return $key1 <=> $key2;
    }
    return $countSynonyms2 <=> $countSynonyms1;
});

foreach ($arr as $index => $item) {
    echo $index . " - " . implode(", ", $item) . PHP_EOL;
}