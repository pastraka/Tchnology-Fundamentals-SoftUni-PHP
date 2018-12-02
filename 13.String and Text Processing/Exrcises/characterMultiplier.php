<?php

$input = explode(" ", readline());
$string1 = $input[0];
$string2 = $input[1];

if (strlen($string1) >= strlen($string2)) {
    $long = $string1;
    $short = $string2;
} else {
    $long = $string2;
    $short = $string1;
}
$sum = 0;

for ($i = 0; $i < strlen($short); $i++) {
    $sum += ord($short[$i]) * ord($long[$i]);
}

for ($j = strlen($short); $j < strlen($long); $j++) {
    $sum += ord($long[$j]);
}

echo $sum;



//<?php
//$input = explode(" ", readline());
//$string1 = $input[0];
//$string2 = $input[1];
//$result = sumStrings($string1, $string2);
//echo $result;
///**
// * @param $string1
// * @param $string2
// * @return float|int
// */
//function sumStrings($string1, $string2)
//{
//    $sum = 0.0;
//    $bigger = max(strlen($string1), strlen($string2));
//    $longestString = strlen($string1) > strlen($string2) ? $string1 : $string2;
//    for ($i = 0; $i < $bigger; $i++) {
//        if (isset($string1[$i]) && isset($string2[$i])) {
//            $sum += ord($string1[$i]) * ord($string2[$i]);
//        } else {
//            $sum += ord($longestString[$i]);
//        }
//    }
//    return $sum;
//}