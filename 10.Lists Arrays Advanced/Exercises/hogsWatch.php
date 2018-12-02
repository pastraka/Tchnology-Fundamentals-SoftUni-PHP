<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 1.11.2018 г.
 * Time: 13:02
 */

$homesToVisit = intval(readline());
$initialPresents = intval(readline());
$visitedHomes = 0;
$remainingHomes = $homesToVisit;
$additionalPresents = 0;
$timesBack = 0;
$totalPresents = 0;
$presents = $initialPresents;

for ($home = 1; $home <= $homesToVisit; $home++) {
    $presentsToLeave = intval(readline());

    if ($initialPresents >= $presentsToLeave) {
        $initialPresents -= $presentsToLeave;
    } else {
        $timesBack++;
        $presentsToGet = floor($presents / ($home) * ($homesToVisit - $home) + ($presentsToLeave - $initialPresents));
        $initialPresents += $presentsToGet;
        //$additionalPresents = intval($presentsToLeave - $initialPresents);
        $initialPresents -= $presentsToLeave;
        $totalPresents += $presentsToGet;
    }
}

if ($timesBack == 0) {
    echo $initialPresents;
} else {
    echo $timesBack . PHP_EOL;
    echo $totalPresents;
}