<?php

$input = readline();
$usersBySide = [];

while (true) {
    if ($input == "Lumpawaroo") {
        break;
    }

    if (strstr($input, " | ")) {
        list($side, $user) = explode(" | ", $input);

        if (!key_exists($side, $usersBySide)) {
            $usersBySide[$side] = [];
        }
        $exists = false;
        foreach ($usersBySide as $userArray) {
            if (in_array($user, $userArray)) {
                $exists = true;
                break;
            }
        }
        if (!$exists) {
            $usersBySide[$side][] = $user;
        }
    } else {
        list($user, $side) = explode(" -> ", $input);
        if (!key_exists($side, $usersBySide)) {
            $usersBySide[$side] = [];
        }

        foreach ($usersBySide as $innerSide => $userArray) {
            $index = array_search($user, $usersBySide[$innerSide]);
            if ($index !== false) {
                array_splice($usersBySide[$innerSide], $index, 1);
                break;
            }
        }
        $usersBySide[$side][] = $user;
        echo "$user joins the $side side!" . PHP_EOL;
    }

    $input = readline();
}

ksort($usersBySide);
uasort($usersBySide, function ($userArray1, $userArray2) {
    return count($userArray2) <=> count($userArray1);
});


//uksort($usersBySide, function ($key1, $key2) use ($usersBySide) {
//    $value1 = $usersBySide[$key1];
//    $value2 = $usersBySide[$key2];
//
//    $count1 = count($value1);
//    $count2 = count($value2);
//
//    if ($count1 === $count2) {
//        return $key1 <=> $key2;
//    }
//    return $count2 <=> $count1;
//});

foreach ($usersBySide as $side => $userArray) {
    if (count($userArray) === 0) continue;

    echo "Side: $side, Members: " . count($userArray) . PHP_EOL;
    sort($userArray);

    foreach ($userArray as $user) {
        echo "! $user" . PHP_EOL;
    }
}