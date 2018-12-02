<?php

class Person
{
    private $name;
    private $id;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $id
     * @param $age
     */
    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
}

$arr = [];

while (true) {

    $input = readline();

    if ($input == "End") {
        break;
    }
    $tokens = explode(" ", $input);
    $name = $tokens[0];
    $id = $tokens[1];
    $age = $tokens[2];

    $person = new Person($name, $id, $age);
    array_push($arr, $person);
}

usort($arr, function ($a, $b) {
    return $a->getAge() <=> $b->getAge();
});


foreach ($arr as $value) {

    echo "{$value->getName()} with ID: {$value->getId()} is {$value->getAge()} years old." . PHP_EOL;
}