<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 13.10.2018 г.
 * Time: 11:07
 */
$fieldSize = intval(readline());
$positions = array_map('intval', explode(" ", readline()));
$field = [];

for ($i = 0; $i < $fieldSize; $i++) {
    if (in_array($i, $positions)) {
        $field[$i] = 1;
    } else {
        $field[$i] = 0;
    }
}

$line = readline();

while ($line != "end") {
    $input = explode(" ", $line);
    $ladybugToMove = intval($input[0]);

    if ($ladybugToMove < 0 || $ladybugToMove >= $fieldSize || $field[$ladybugToMove] === 0){
        $line = readline();
        continue;
    }
    $command = $input[1];
    $length = intval($input[2]);

    $field[$ladybugToMove] = 0;

    if ($command === "left") {
        $nextPos = $ladybugToMove - $length;

        while ($nextPos >= 0 && $field[$nextPos] == 1) {
            $nextPos -= $length;
        }
        if ($nextPos >= 0) {
            $field[$nextPos] = 1;
        }
    } elseif ($command === "right") {
        $nextPos = $ladybugToMove + $length;

        while ($nextPos < $fieldSize && $field[$nextPos] == 1) {
            $nextPos += $length;
        }
        if ($nextPos < $fieldSize) {
            $field[$nextPos] = 1;
        }
    }

    $line = readline();
}

echo implode(" ", $field);

//$fieldSize = intval(readline());
//$field = array_fill(0, $fieldSize, 0);
//$allLadybugsIndexes = explode(" ", readline());
//
//for ($i = 0; $i < count($allLadybugsIndexes); $i++) {
//
//    if ($allLadybugsIndexes[$i] >= 0 && $allLadybugsIndexes[$i] < $fieldSize) {
//        $field[$allLadybugsIndexes[$i]] = 1;
//    }
//}
//
//$commands = readline();
//
//while ($commands != "end") {
//
//    $commands = explode(" ", $commands);
//    $bugIndex = $commands[0];
//    $direction = $commands[1];
//    $flyLength = $commands[2];
//
//    if ($flyLength < 0) {
//        switch ($direction) {
//            case "left":
//                $direction = "right";
//                break;
//            case  "right":
//                $direction = "left";
//                break;
//        }
//    }
//
//    if ($bugIndex >= 0 && $bugIndex < $fieldSize) {
//        if ($field[$bugIndex] == 1) {
//            $field[$bugIndex] = 0;
//            if ($direction == "left") {
//                $flyLength = abs($flyLength);
//                for ($i = $bugIndex - $flyLength; $i >= 0; $i = $i - $flyLength) {
//                    if ($field[$i] == 0) {
//                        $field[$i] = 1;
//                        break;
//                    }
//                }
//            }
//
//            if ($direction == "right") {
//                $flyLength = abs($flyLength);
//                for ($i = $bugIndex + $flyLength; $i < count($field); $i = $i + $flyLength) {
//                    if ($field[$i] == 0) {
//                        $field[$i] = 1;
//                        break;
//                    }
//                }
//            }
//        }
//    }
//
//    $commands = readline();
//}
//
//foreach ($field as $item) {
//    echo "$item ";
//}