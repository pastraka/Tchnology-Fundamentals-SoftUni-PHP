<?php

$bands = [];
$bandTime = [];
$input = readline();

while (true) {
    if ($input == "start of concert") {
        break;
    }
    $tokens = explode("; ", $input);
    $command = $tokens[0];
    switch ($command) {
        case "Add":
            $bandName = $tokens[1];
            $members = explode(", ", $tokens[2]);
            if (!key_exists($bandName, $bands)) {
                $bands[$bandName] = [];
                $bandTime[$bandName] = [];
                $bandTime[$bandName]["time"] = 0;
            }
            for ($i = 0; $i < count($members); $i++) {
                if (!in_array($members[$i], $bands[$bandName])) {
                    $bands[$bandName][] = $members[$i];
                }
            }
            break;
        case "Play":
            $bandName = $tokens[1];
            $time = $tokens[2];
            if (!key_exists($bandName, $bands)) {
                $bands[$bandName] = [];
                $bandTime[$bandName] = [];
                $bandTime[$bandName]["time"] = 0;
            }
            $bandTime[$bandName]['time'] += $time;
            break;
    }
    $input = readline();
}

uksort($bandTime, function ($key1, $key2) use ($bandTime) {
    $time1 = $bandTime[$key1];
    $time2 = $bandTime[$key2];

    if ($time1 == $time2) {
        return $key1 <=> $key2;
    }
    return $time2 <=> $time1;
});

$input = readline();

$totalTime = 0;

foreach ($bandTime as $item) {
    $totalTime += $item['time'];
}

echo "Total time: $totalTime" . PHP_EOL;
foreach ($bandTime as $index => $band) {
    echo $index . " -> " . implode("\n", $band) . PHP_EOL;
}
echo $input . PHP_EOL;
foreach ($bands[$input] as $band) {
    echo "=> " . $band . PHP_EOL;
}