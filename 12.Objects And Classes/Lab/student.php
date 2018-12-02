<?php

class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $homeTown;

    /**
     * Student constructor.
     * @param $firstName
     * @param $lastName
     * @param $age
     * @param $homeTown
     */
    public function __construct($firstName, $lastName, $age, $homeTown)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->homeTown = $homeTown;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getHomeTown()
    {
        return $this->homeTown;
    }
}

$input = readline();
$studentInfo = [];

while ($input != "end") {

    $tokens = explode(" ", $input);
    $firstName = $tokens[0];
    $lastName = $tokens[1];
    $age = $tokens[2];
    $homeTown = $tokens[3];
    $students = new Student($firstName, $lastName, $age, $homeTown);
    array_push($studentInfo, $students);

    $input = readline();
}
$town = readline();

foreach ($studentInfo as $value) {

    if ($value->getHomeTown() === $town) {

        echo $value->getfirstName() . " " . $value->getlastName() . " " . "is" . " " . $value->getAge() . " " . "years old." . PHP_EOL;
    }
}