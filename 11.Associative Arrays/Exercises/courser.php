<?php

$input = readline();
$courses = [];

while (true) {
    if ($input == "end") {
        break;
    }

    $tokens = explode(" : ", $input);
    $courseName = $tokens[0];
    $studentName = $tokens[1];

    if (!key_exists($courseName, $courses)) {
        $courses[$courseName] = [];
    }
    array_push($courses[$courseName], $studentName);


    $input = readline();
}

uasort($courses, function ($a, $b) {
    $a = count($a);
    $b = count($b);
    return ($a == $b) ? 0 : (($a < $b) ? 1 : -1);
});

foreach ($courses as $index => $name) {
    asort($name);
    echo "{$index}: " . count($name) . PHP_EOL;

    foreach ($name as $student) {
        echo "-- {$student}" . PHP_EOL;
    }
}