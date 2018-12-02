<?php

$farming = ["shards" => 0, "motes" => 0, "fragments" => 0];
$junk = [];

$isRunning = true;
while ($isRunning) {
    $line = readline();

    $input = explode(" ", $line);

    for ($i = 0; $i < count($input); $i += 2) {
        $quantity = $input[$i];
        $material = strtolower($input[$i + 1]);

        if (key_exists($material, $farming)) {

            $farming[$material] += $quantity;
            if ($farming[$material] >= 250) {
                $farming[$material] -= 250;
                $isRunning = false;

                switch ($material) {
                    case "shards":
                        echo "Shadowmourne obtained!" . PHP_EOL;
                        break;
                    case "fragments":
                        echo "Valanyr obtained!" . PHP_EOL;
                        break;
                    case "motes":
                        echo "Dragonwrath obtained!" . PHP_EOL;
                        break;
                }
                break;
            }
        } else {
            if (!key_exists($material, $junk)) {
                $junk[$material] = 0;
            }
            $junk[$material] += $quantity;
        }
    }
}
ksort($junk);

$mat = [];
$qnty = [];

foreach ($farming as $index => $item) {
    $mat[] = $index;
    $qnty[] = $item;
}

array_multisort($qnty, SORT_DESC, $mat, SORT_ASC, $farming);

foreach ($farming as $index => $item) {
    echo "$index: $item" . PHP_EOL;
}

foreach ($junk as $index => $item) {
    echo "$index: $item" . PHP_EOL;
}



