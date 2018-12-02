<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 3.10.2018 г.
 * Time: 17:36
 */

$century = intval(readline());
$year = $century * 100;
$days = intval($year * 365.2422);
$hour = 24 * $days;
$minutes = 60 * $hour;


echo "$century centuries = $year years = $days days = $hour hours = $minutes minutes";
