<?php

$num = intval(readline());
$grade = [];

for ($i = 0; $i < $num; $i++) {
    $studentName = readline();
    $studentGrade = floatval(readline());

    if (!key_exists($studentName, $grade)) {
        $grade[$studentName] = [];
    }
    array_push($grade[$studentName], $studentGrade);
}

foreach ($grade as $key => $value) {

    $delimiter = count($grade[$key]);
    $grade[$key] = array_sum($value) / $delimiter;

    if ($grade[$key] < 4.50) {
        unset($grade[$key]);
        array_values($grade);
    }
}
arsort($grade);

foreach ($grade as $index => $item) {
    echo $index . " -> " . sprintf("%0.2f", $item) . PHP_EOL;
}