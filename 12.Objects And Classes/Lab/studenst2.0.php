<?php

class Students
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
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @param mixed $homeTown
     */
    public function setHomeTown($homeTown): void
    {
        $this->homeTown = $homeTown;
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
$firstName = "";
$lastName = "";
$age = 0;
$homeTown = "";

while ($input != "end") {

    $tokens = explode(" ", $input);
    $firstName = $tokens[0];
    $lastName = $tokens[1];
    $age = intval($tokens[2]);
    $homeTown = $tokens[3];

    if (isStudent($studentInfo, $firstName, $lastName)) {

        foreach ($studentInfo as $student) {

            if ($student->getFirstName() == $firstName and $student->getLastName() == $lastName) {

                $student->setAge($age);
                $student->setHomeTown($homeTown);
                break;
            }
        }
    } else {
        $students = new Students($firstName, $lastName, $age, $homeTown);
        array_push($studentInfo, $students);
    }

    $input = readline();
}
function isStudent($studentInfo, $firstName, $lastName)
{
    foreach ($studentInfo as $item) {

        if ($item->getFirstName() == $firstName and $item->getLastName() == $lastName) {
            return true;
        }
    }
    return false;
}

$town = readline();

foreach ($studentInfo as $value) {

    if ($value->getHomeTown() === $town) {

        echo $value->getFirstName() . " " . $value->getLastName() . " " . "is" . " " . $value->getAge() . " " . "years old." . PHP_EOL;
    }
}