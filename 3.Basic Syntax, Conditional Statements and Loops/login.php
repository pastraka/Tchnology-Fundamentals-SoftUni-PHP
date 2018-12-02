<?php
$userName = readline();
$password = strrev($userName);
$count = 0;

$line = readline();

while ($password != $line) {
    $count++;
    if ($count == 4) {
        echo "User $userName blocked!";
        return;
    }
    echo "Incorrect password. Try again. " . PHP_EOL;


    $line = readline();
}

echo "User $userName logged in.";