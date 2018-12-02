<?php
$input = strtolower(readline());
$arr = explode(" ", $input);
$result = [];

for ($i = 0; $i < count($arr); $i++) {
    if (!key_exists($arr[$i], $result)) {
        $result[$arr[$i]] = 0;
    }
    $result[$arr[$i]]++;
}
$finalArr = [];

foreach ($result as $index => $item) {
    if ($item % 2 == 1) {
        $finalArr[] = $index;
    }
}
echo implode(" ", $finalArr);
