<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 28.10.2018 г.
 * Time: 13:32
 */

$input = readline();

$bestLine = [];
$bestQuality = -1000;
$bestLength = 0;
$bestAvrQ = 0.0;

while (true) {
    if ($input == "Bake It!") {
        break;
    }
    $tokens = explode("#", $input);

    $currentQuality = array_sum($tokens);
    $currentLength = count($tokens);

    if ($currentQuality > $bestQuality) {

        $bestQuality = $currentQuality;
        $bestLength = $currentLength;
        $bestLine = $tokens;

    } elseif ($currentQuality === $bestQuality) {

        $currAvrQ = floatval($bestQuality / $bestLength);
        $bestAvrQ = $currAvrQ;

        if ($currAvrQ > $bestAvrQ) {

            $bestAvrQ = $currAvrQ;
            $bestQuality = $currentQuality;
            $bestLength = $currentLength;
            $bestLine = $tokens;

        } elseif ($currAvrQ === $bestAvrQ) {

            if ($currentLength < $bestLength) {

                $bestLength = $currentLength;
                $bestQuality = $currentQuality;
                $bestAvrQ = $currAvrQ;
                $bestLine = $tokens;
            }
        }
    }

    $input = readline();
}

echo "Best Batch quality: $bestQuality" . PHP_EOL;
echo implode(" ", $bestLine);