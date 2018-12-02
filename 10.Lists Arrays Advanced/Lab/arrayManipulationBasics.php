<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 27.10.2018 г.
 * Time: 10:14
 */

$arr = array_map('intval', explode(" ", readline()));
$line = readline();

while ($line != "end") {

    $tokens = explode(" ", $line);
    $command = $tokens[0];

    switch ($command) {
        case "Add":
            $numToAdd = intval($tokens[1]);
            $arr[] = add($arr, $numToAdd);
            break;
        case "Remove":
            $numToRemove = intval($tokens[1]);
            $arr = remove($arr, $numToRemove);
            break;
        case "RemoveAt":
            $indexToRemove = intval($tokens[1]);
            $arr = removeAt($arr, $indexToRemove);
            break;
        case "Insert":
            $numToInsert = intval($tokens[1]);
            $indexToInsert = intval($tokens[2]);
            $arr = insert($arr, $numToInsert, $indexToInsert);
            break;

    }

    $line = readline();
}

echo implode(" ", $arr);

function add($arr, $numToAdd)
{
    return $arr[] = $numToAdd;
}

function remove($arr, $numToRemove)
{
    $index = array_search($numToRemove, $arr);
    unset($arr[$index]);
    return $arr;
}

function removeAt($arr, $indexToRemove)
{
    array_splice($arr, $indexToRemove, 1);
    return $arr;
}

function insert($arr, $numToInsert, $indexToInsert)
{
    array_splice($arr, $indexToInsert, 0, $numToInsert);
    return $arr;
}