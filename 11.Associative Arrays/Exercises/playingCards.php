<?php

$input = readline();
$cardList = [];

while (true) {
    if ($input == "JOKER") {
        break;
    }

    $tokens = explode(": ", $input);
    $player = $tokens[0];
    $card = explode(", ", $tokens[1]);

    if (!key_exists($player, $cardList)) {
        $cardList[$player] = [];
    }
    for ($i = 0; $i < count($card); $i++) {

        if (!in_array($card[$i], $cardList[$player])) {
            $cardList[$player][] = $card[$i];
        }
    }


    $input = readline();
}

$powers = ["C" => 1, "D" => 2, "H" => 3, "S" => 4, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, "J" => 11, "Q" => 12, "K" => 13, "A" => 14];

$sum = 0;

foreach ($cardList as $index => $item) {

    for ($i = 0; $i < count($item); $i++) {
        $current = $item[$i];
        if (strlen($current) == 3) {
            $cardPStr = $current[0] . $current[1];
            $typePStr = $current[strlen($current) - 1];
        } else {
            $cardPStr = $current[0];
            $typePStr = $current[strlen($current) - 1];
        }
        $cardPower = intval($powers[$cardPStr]);
        $cardType = intval($powers[$typePStr]);

        $sum += $cardPower * $cardType;
    }

    echo $index . ": " . $sum . PHP_EOL;
    $sum = 0;
}



