<?php

$input = explode("\\", readline());
$word = $input[count($input) - 1];
$tokens = explode(".", $word);
$fileName = $tokens[0];
$fileExtension = $tokens[1];
$result = [];

if (count($tokens) > 2) {

    for ($i = 0; $i < count($tokens) - 1; $i++) {
        $result[] = $tokens[$i];
    }
    echo "File name: " . implode(".", $result) . PHP_EOL;
    echo "File extension: " . $tokens[count($tokens) - 1] . PHP_EOL;
} else {

    echo "File name: $fileName" . PHP_EOL;
    echo "File extension: $fileExtension" . PHP_EOL;
}



//<?php
//
//$input = readline();
//$file = substr($input, strrpos($input, "\\") + 1);
//$fileName = substr($file, 0, strrpos($file, "."));
//$fileExtension = substr($file, strrpos($file, ".") + 1);
//
//echo "File name: $fileName" . PHP_EOL;
//echo "File extension: $fileExtension" . PHP_EOL;