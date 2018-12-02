<?php

class Group
{
    public $user, $comment = [], $dateOfAttendance = [];

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getComment(): array
    {
        return $this->comment;
    }

    /**
     * @param array $comment
     */
    public function setComment(array $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return array
     */
    public function getDateOfAttendance(): array
    {
        return $this->dateOfAttendance;
    }

    /**
     * @param array $dateOfAttendance
     */
    public function setDateOfAttendance(array $dateOfAttendance): void
    {
        $this->dateOfAttendance = $dateOfAttendance;
    }

}

$groups = [];
$input = readline();

while ($input != "end of dates") {

    $temp = new Group();

    $tokens = explode(" ", $input);
    $user = $tokens[0];
    $temp->setUser($user);

    if (count($tokens) > 1) {
        $dateOfAttendance = explode(",", $tokens[1]);

        for ($i = 0; $i < count($dateOfAttendance); $i++) {

            $temp->dateOfAttendance[] = $dateOfAttendance[$i];
        }
    }
    if (!key_exists($user, $groups)) {

        $groups[] = $temp;

    } else {
        if ($temp->dateOfAttendance != 0) {

            foreach ($groups as $item) {

                if ($user == $groups->user) {

                    for ($i = 0; $i < count($dateOfAttendance); $i++) {

                        $groups->dateOfAttendance[] = $dateOfAttendance[$i];
                    }
                }
            }
        }
    }
    $input = readline();
}

$input = readline();

while ($input != "end of comments") {

    $tokens = explode("-", $input);
    $user = $tokens[0];

    if (count($tokens) > 0) {
        $comment = $tokens[1];
    } else {
        $comment = "";
    }

    foreach ($groups as $group) {
        if ($user == $group->user) {
            $group->comment[] = $comment;
        }
    }

    $input = readline();
}

uasort($groups, function ($a, $b) use ($groups) {
    return $a->user <=> $b->user;
});

foreach ($groups as $group) {

    echo $group->user . PHP_EOL;
    echo "Comments:" . PHP_EOL;

    if (count($group->comment) > 0) {

        foreach ($group->comment as $comm) {
            echo "- $comm" . PHP_EOL;
        }
    }

    echo "Dates attended:" . PHP_EOL;

    if ($group->dateOfAttendance != 0) {

        asort($group->dateOfAttendance);

        foreach ($group->dateOfAttendance as $date) {
            echo "-- $date" . PHP_EOL;
        }
    }
}