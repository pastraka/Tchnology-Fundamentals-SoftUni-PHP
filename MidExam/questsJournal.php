<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 4.11.2018 г.
 * Time: 10:47
 */

$input = explode(", ", readline());
$journal = [];
$line = readline();
$journal = $input;
while (true) {
    if ($line == "Retire!") {
        break;
    }

    $tokens = explode(" - ", $line);
    $command = $tokens[0];
    switch ($command) {
        case "Start":
            $quest = $tokens[1];
            if (in_array($quest, $journal) == false) {
                $journal[] = $quest;
            }
            break;
        case "Complete":
            $quest = $tokens[1];
            if (in_array($quest, $journal)) {
                $index = array_search($quest, $journal);
                unset($journal[$index]);
                $journal = array_values($journal);
            }
            break;
        case "Side Quest":
            $split = explode(":", $tokens[1]);
            $quest = $split[0];
            $sideQuest = $split[1];
            for ($i = 0; $i < count($journal); $i++) {

                if ($journal[$i] == $quest) {
                    $index = array_search($quest, $journal);
                    if (in_array($sideQuest, $journal) == false) {
                        array_splice($journal, $index + 1, 0, $sideQuest);
                    }
                }
            }
            break;
        case "Renew":
            $quest = $tokens[1];

            if (in_array($quest, $journal)) {
                $index = array_search($quest, $journal);
                $current = $quest;
                unset($journal[$index]);
                $journal = array_values($journal);
                $journal[] = $current;
            }
            break;
    }

    $line = readline();
}

echo implode(", ", $journal);