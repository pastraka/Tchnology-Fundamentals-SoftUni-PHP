<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 12.10.2018 г.
 * Time: 11:54
 */
$length = intval(readline());
$line = readline();

$bestDna = "";
$bestIndex = 0;
$bestSum = 0;
$bestCount = 0;
$j = 0;
$row = -1;

while ($line != "Clone them!") {

    $j++;

    $dna = str_replace("!", "", $line);

    if (strlen($dna) != $length) {
        $line = readline();
        continue;
    }

    $maxCount = 0;
    $index = -1;
    $currentCount = 0;
    $lastElement = 0;
    $currentSum = 0;

    for ($i = 0; $i < $length; $i++) {
        $num = intval($dna[$i]);
        $currentSum += $num;

        if ($num === 1) {
            if ($lastElement === 1) {
                $currentCount++;
            } else {
                $lastElement = 1;
                $currentCount = 1;
            }
        } else {
            if ($currentCount > $maxCount) {
                $maxCount = $currentCount;
                $index = $i - $maxCount + 1;
            }
            $lastElement = 0;
            $currentCount = 0;
        }
    }

    if ($maxCount > $bestCount) {

        $bestDna = $dna;
        $bestCount = $maxCount;
        $bestSum = $currentSum;
        $bestIndex = $index;
        $row = $j;
    } elseif ($maxCount === $bestCount) {

        if ($index < $bestIndex) {
            $bestDna = $dna;
            $bestCount = $maxCount;
            $bestSum = $currentSum;
            $bestIndex = $index;
            $row = $j;
        } elseif ($index === $bestIndex) {

            if ($currentSum > $bestSum) {
                $bestDna = $dna;
                $bestCount = $maxCount;
                $bestSum = $currentSum;
                $bestIndex = $index;
                $row = $j;
            }
        }
    }

    $line = readline();
}

echo "Best DNA sample $row with sum: $bestSum." . PHP_EOL;

for ($i = 0; $i < strlen($bestDna); $i++) {
    echo $bestDna[$i] . " ";
}



//$lengthOfSequence = intval(readline());
//$sequence = readline();
//$currentDna = [];
//$bestSample = [];
//
//while ($sequence != "Clone them!") {
//
//    $lineDna = preg_replace("/[^0-9]/", "", $sequence);
//    $lineDna = str_split($lineDna);
//
//    if (count($lineDna) == $lengthOfSequence) {
//        array_push($currentDna, $lineDna);
//    }
//
//    $sequence = readline();
//}
//
//$index = 1;
//$bestStartIndex = $lengthOfSequence;
//$bestLength = 0;
//$bestSum = 0;
//
//$bestSample = $currentDna[0];
//$sum = 0;
//
//for ($i = 0; $i < count($currentDna); $i++) {
//    $sum = array_sum($currentDna[$i]);
//    $startIndex = $lengthOfSequence;
//    $bestLen = 0;
//    $len = 0;
//
//    for ($j = 0; $j < count($currentDna[$i]); $j++) {
//
//        if ($currentDna[$i][$j] == 1) {
//            $len++;
//
//            if ($j == count($currentDna[$i]) - 1) {
//
//                if ($len > $bestLen) {
//
//                    $bestLen = $len;
//                    $startIndex = $j - $len;
//                }
//                $len = 0;
//            }
//        } else {
//
//            if ($len > $bestLen) {
//
//                $bestLen = $len;
//                $startIndex = $j - $len;
//            }
//            $len = 0;
//        }
//    }
//    if ($bestLen > $bestLength) {
//        $bestLength = $bestLen;
//        $index = $i + 1;
//        $bestSum = $sum;
//        $bestStartIndex = $startIndex;
//        $bestSample = $currentDna[$i];
//    } elseif ($bestLen == $bestLength) {
//
//        if ($bestStartIndex > $startIndex) {
//            $index = $i + 1;
//            $bestSum = $sum;
//            $bestStartIndex = $startIndex;
//            $bestSample = $currentDna[$i];
//        } elseif ($bestStartIndex == $startIndex) {
//            if ($bestSum < $sum) {
//                $index = $i + 1;
//                $bestSum = $sum;
//                $bestSample = $currentDna[$i];
//            }
//        }
//    }
//}
//echo "Best DNA sample $index with sum: $bestSum." . PHP_EOL;
//foreach ($bestSample as $dna) {
//    echo $dna . " ";
//}