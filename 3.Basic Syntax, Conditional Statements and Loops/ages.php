<?php

$age = intval(readline());

if ($age >= 0 && $age <= 2) {
    echo "baby";
} else if ($age >= 3 && $age <= 13) {
    echo "child";
} else if ($age >= 14 && $age <= 19) {
    echo "teenager";
} else if ($age >= 20 && $age <= 65) {
    echo "adult";
} else if ($age >= 66) {
    echo "elder";
}

//Вариант със Switch

/*$age = intval(readline());
switch (1){
    case ($age >= 0 && $age <= 7): echo "Child"; break;
    //....
}*/