<?php

class  Students
{
    private $name;
    private $dates = [];
    private $comments = [];

    /**
     * Students constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @param mixed $name
     */
    private function setName($name): void
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function addDate(string $date): void
    {
        $this->dates[] = $date;
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * @return array
     */
    public function getDates(): array
    {
        return $this->dates;
    }

    /**
     * @param array $dates
     */
    private function setDates(array $dates): void
    {
        $this->dates = $dates;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param array $comments
     */
    private function setComments(array $comments): void
    {
        $this->comments = $comments;
    }

}

$students = []; // name  -> object (Student)
$line = readline();

while ($line != "end of dates") {

    $tokens = explode(" ", $line);
    $name = $tokens[0];

    if (!key_exists($name, $students)) {

        $student = new Students($name);
        $students[$name] = $student;
    }

    if (count($tokens) > 1) {

        $dates = explode(",", $tokens[1]);
        $student = $students[$name];

        foreach ($dates as $date) {

            $student->addDate($date);
        }
    }
    $line = readline();
}

$line = readline();

while ($line != "end of comments") {

    $tokens = explode("-", $line);
    list($name, $comment) = $tokens;

    if (key_exists($name, $students)) {

        $student = $students[$name];
        $student->addComment("- " . $comment);
    }
    $line = readline();
}

ksort($students, SORT_LOCALE_STRING);

foreach ($students as $student) {
    $comments = implode(PHP_EOL, $student->getComments());

    echo $student->getName()
        . PHP_EOL
        . "Comments:"
        . PHP_EOL
        . (strlen($comments) > 0 ? ($comments . PHP_EOL) : "")
        . "Dates attended:"
        . PHP_EOL;

    $dates = $student->getDates();
    usort($dates, function ($date1, $date2) {

        $dateParts1 = array_map("intval", explode("/", $date1));
        $dateParts2 = array_map("intval", explode("/", $date2));
        $yearComparison = $dateParts1[2] <=> $dateParts2[2];

        if ($yearComparison === 0) {

            $monthComparison = $dateParts1[1] <=> $dateParts2[1];

            if ($monthComparison === 0) {

                $dayComparison = $dateParts1[0] <=> $dateParts2[0];
                return $dayComparison;
            }
            return $monthComparison;
        }
        return $yearComparison;
    });
    foreach ($dates as $date) {

        echo "-- $date" . PHP_EOL;
    }
}