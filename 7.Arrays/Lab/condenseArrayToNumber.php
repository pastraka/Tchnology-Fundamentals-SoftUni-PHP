    <?php
    /**
     * Created by PhpStorm.
     * User: Toshiba
     * Date: 8.10.2018 г.
     * Time: 20:16
     */
    $arr = array_map('intval', explode(" ", readline()));
    $condense = [];

    if (count($arr) == 1) {
        echo $arr[0];
        return;
    }

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - 1; $j++) {
            $condense[$j] = $arr[$j] + $arr[$j + 1];
        }
        $arr = $condense;
    }
    echo $condense[0];
