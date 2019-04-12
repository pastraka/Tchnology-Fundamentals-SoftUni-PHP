<?php

$input = readline();

while (true) {
    if ($input == "end") {
        break;
    }
    $tokens = explode(":", $input);
    $artist = $tokens[0];
    $song = $tokens[1];
    $patternArtist = preg_match("/^[A-Z][a-z\s\\']+$/m", $artist);
    $patternSong = preg_match('/^[A-Z\s]+$/m', $song);

    if (!$patternArtist || !$patternSong) {
        echo "Invalid input!" . PHP_EOL;
    } else {
        $string = "";
        for ($i = 0; $i < strlen($artist); $i++) {
            $string .= encrypt($artist[$i], strlen($artist));
        }
        $string .= "@";
        for ($i = 0; $i < strlen($song); $i++) {
            $string .= encrypt($song[$i], strlen($artist));
        }
        echo "Successful encryption: {$string}" . PHP_EOL;
    }

    $input = readline();

}

function encrypt($data, $step)
{
    if (ord($data) == 32 || ord($data) == 39) {
        if (ord($data) == 32) {
            $chr = 32;
        } elseif (ord($data) == 39) {
            $chr = 39;
        }
    } elseif (ctype_upper($data)) {
        $newChar = ord($data) + $step;
        if ($newChar > 90) {
            $step = 64 + ((ord($data) + $step) - 90);
        } else {
            $step = ord($data) + $step;
        }
        $chr = $step;
    } elseif (ctype_lower($data)) {
        $newChar = ord($data) + $step;
        if ($newChar > 122) {
            $step = 96 + ((ord($data) + $step) - 122);
        } else {
            $step = ord($data) + $step;
        }
        $chr = $step;
    }
    return chr($chr);
}

