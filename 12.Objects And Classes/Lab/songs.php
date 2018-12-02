<?php

$songs = intval(readline());

class Songs
{
    private $typeList;
    private $name;
    private $time;

    /**
     * Songs constructor.
     * @param $typeList
     * @param $name
     * @param $time
     */
    public function __construct($typeList, $name, $time)
    {
        $this->typeList = $typeList;
        $this->name = $name;
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    public function getTypeList()
    {
        return $this->typeList;
    }
}

$arraySongs = [];

for ($i = 0; $i < $songs; $i++) {

    $current = explode("_", readline());
    $type = $current[0];
    $name = $current[1];
    $time = $current[2];
    $song = new Songs($type, $name, $time);
    array_push($arraySongs, $song);
}

$typeSongs = readline();

if ($typeSongs == 'all') {

    foreach ($arraySongs as $value) {

        echo $value->getName() . PHP_EOL;
    }

} else {

    foreach ($arraySongs as $value) {

        if ($value->getTypeList() === $typeSongs) {

            echo $value->getName() . PHP_EOL;
        }
    }
}