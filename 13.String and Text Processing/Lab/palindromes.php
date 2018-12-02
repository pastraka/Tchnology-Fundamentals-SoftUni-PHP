<?php

$input = preg_split("/[ ,.?!]/", readline(), null, PREG_SPLIT_NO_EMPTY);
$result = [];

for ($i = 0; $i < count($input); $i++) {

    $current = $input[$i];
    $currentRev = strrev($input[$i]);

    if ($current === $currentRev) {

        if (!in_array($current, $result)) {

            $result[] = $current;
        }
    }
}

natcasesort($result);
$result = implode(", ", $result);

echo $result;