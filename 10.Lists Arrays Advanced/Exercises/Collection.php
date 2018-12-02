<?php

$input = readline();
$arr = [];

while ($input != "Print") {
    $tokens = explode(" ", $input);
    $command = $tokens[0];

    if (count($tokens) > 1) {

        $num = $tokens[1];

        switch ($command) {
            case "Push":
                array_unshift($arr, $num);
                break;
            case "Add":
                $arr[] = $num;
                break;
        }
    } else {

        if ($command == "Enqueue") {
            array_pop($arr);
        }

        if ($command == "Pop") {
            $arr = array_reverse($arr);
            array_pop($arr);
            $arr = array_reverse($arr);

        }
    }
    $input = readline();
}
echo implode(" ", $arr);
