<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 20.10.2018 г.
 * Time: 13:41
 */
$inputArr = array_map('intval', explode(" ", readline()));
$longestSeq = findLongestSeq($inputArr);

echo implode(" ", $longestSeq);

?>

<?php

function findLongestSeq($arr)
{
    $length[] = count($arr);
    $previous[] = count($arr);
    $bestLength = 0;
    $lastIndex = -1;

    for ($i = 0; $i < count($arr); $i++) {
        $length[$i] = 1;
        $previous[$i] = -1;

        $iNum = $arr[$i];

        for ($j = 0; $j < $i; $j++) {

            $currentNum = $arr[$j];

            if ($currentNum < $iNum && $length[$j] + 1 > $length[$i]) {
                $length[$i] = $length[$j] + 1;
                $previous[$i] = $j;
            }
        }

        if ($length[$i] > $bestLength) {
            $bestLength = $length[$i];
            $lastIndex = $i;
        }
    }

    $longestSeq = [];

    while ($lastIndex != -1) {
        $longestSeq[] = $arr[$lastIndex];
        $lastIndex = $previous[$lastIndex];
    }

    return array_reverse($longestSeq);
}

?>