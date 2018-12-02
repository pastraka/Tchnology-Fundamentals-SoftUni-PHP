<?php
//
//class Student
//{
//    private $name;
//    private $listOfGrades = [];
//    private $average;
//
//    /**
//     * Student constructor.
//     * @param $name
//     * @param array $listOfGrades
//     * @param $average
//     */
//    public function __construct($name, array $listOfGrades, $average)
//    {
//        $this->setName($name);
//        $this->setListOfGrades($listOfGrades);
//        $this->setAverage($average);
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    public function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return array
//     */
//    public function getListOfGrades(): array
//    {
//        return $this->listOfGrades;
//    }
//
//    /**
//     * @param array $listOfGrades
//     */
//    public function setListOfGrades(array $listOfGrades): void
//    {
//        $this->listOfGrades = $listOfGrades;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAverage()
//    {
//        return $this->average;
//    }
//
//    /**
//     * @param mixed $average
//     */
//    public function setAverage($average): void
//    {
//        $this->average = $average;
//    }
//
//    public function __toString()
//    {
//        if ($this->getAverage() >= 5.00) {
//            $format = sprintf("%0.2f", $this->getAverage());
//            return $this->getName() . " -> " . $format . PHP_EOL;
//        }
//        return "";
//    }
//}
//
//$num = intval(readline());
//
//$students = [];
//
//for ($i = 0; $i < $num; $i++) {
//
//    $input = readline();
//    $tokens = explode(" ", $input);
//    $name = $tokens[0];
//    $grades = [];
//    $sum = 0;
//
//    for ($j = 1; $j < count($tokens); $j++) {
//
//        $grades[] = $tokens[$j];
//        $sum += $tokens[$j];
//    }
//    $average = $sum / count($grades);
//    $student = new Student($name, $grades, $average);
//    $students[] = $student;
//}
//
//usort($students, function (Student $st1, Student $st2) use ($students) {
//
//    $name1 = $st1->getName();
//    $name2 = $st2->getName();
//    $avg1 = $st1->getAverage();
//    $avg2 = $st2->getAverage();
//
//    if ($name1 === $name2) {
//        return $avg2 <=> $avg1;
//    }
//    return $name1 <=> $name2;
//});
//
//foreach ($students as $student) {
//    echo $student;
//}

//<?php

class Student
{
    private $name;
    private $grades = [];
    private $average;

    /**
     * Student constructor.
     * @param $name
     * @param $grades
     * @param $average
     */
    public function __construct($name, array $grades, $average)
    {
        $this->setName($name);
        $this->setGrades($grades);
        $this->setAverage($average);
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param array $grades
     */
    public function setGrades($grades): void
    {
        $this->grades = $grades;
    }

    /**
     * @param mixed $average
     */
    public function setAverage($average): void
    {
        $this->average = $average;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * @return mixed
     */
    public function getAverage()
    {
        return $this->average;
    }
}

$num = intval(readline());
$arr = [];

for ($i = 0; $i < $num; $i++) {

    $input = readline();
    $tokens = explode(" ", $input);
    $name = $tokens[0];
    $grades = [];

    for ($j = 1; $j < count($tokens); $j++) {

        $grades[] = $tokens[$j];
    }
    $sum = array_sum($grades);
    $average = $sum / count($grades);
    $average = sprintf("%0.2f", $average);
    $studentList = new Student($name, $grades, $average);

    array_push($arr, $studentList);

}

usort($arr, function (Student $a, Student $b) use ($arr) {
    $name1 = $a->getName();
    $name2 = $b->getName();
    $avg1 = $a->getAverage();
    $avg2 = $b->getAverage();

    if ($name1 === $name2) {
        return $avg2 <=> $avg1;
    }
    return $name1 <=> $name2;
});

foreach ($arr as $key) {
    if ($key->getAverage() >= 5.00) {

        echo $key->getName() . " -> " . $key->getAverage() . PHP_EOL;
    }
}