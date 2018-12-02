<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.10.2018 г.
 * Time: 21:40
 */
$input = floatval(readline());
$kilometers = sprintf("%0.2f", $input * 0.001);
echo $kilometers;