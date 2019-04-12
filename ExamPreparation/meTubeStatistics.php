<?php

$input = readline();
$arr = [];
$likes = [];

while (true) {
    if ($input == "stats time") {
        break;
    }
    $tokens = explode("-", $input);
    if (count($tokens) == 2) {
        $videoName = $tokens[0];
        $views = intval($tokens[1]);

        if (!key_exists($videoName, $arr)) {
            $arr[$videoName] = 0;
            $likes[$videoName] = 0;
        }
        $arr[$videoName] += $views;

    } else {
        $tokens = explode(":", $input);

        if ($tokens[0] == "like") {
            $video = $tokens[1];
            $likes[$video]++;
        } elseif ($tokens[0] == "dislike") {
            $video = $tokens[1];
            $likes[$video]--;
        }
    }
    $input = readline();
}

$input = readline();

if ($input == "by likes") {
    arsort($likes);
    foreach ($likes as $index => $like) {
        echo "$index - $arr[$index] views - $like likes" . PHP_EOL;
    }
} elseif ($input == "by views") {
    arsort($arr);
    foreach ($arr as $index => $item) {
        echo "$index - $arr[$index] views - $likes[$index] likes" . PHP_EOL;
    }
}

