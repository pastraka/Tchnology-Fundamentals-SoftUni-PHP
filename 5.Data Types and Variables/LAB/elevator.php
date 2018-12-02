<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 3.10.2018 г.
 * Time: 14:28
 */

$numberOfPeople = intval(readline());
$capacity = intval(readline());
$courses = 0;

while ($numberOfPeople > 0) {
    $numberOfPeople -= $capacity;
    $courses++;
}
echo $courses;