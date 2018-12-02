<?php

class Library
{
    private $name;
    private $listOfBooks = [];

    /**
     * Library constructor.
     * @param $name
     * @param array $listOfBooks
     */
    public function __construct($name, array $listOfBooks)
    {
        $this->name = $name;
        $this->listOfBooks = $listOfBooks;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getListOfBooks(): array
    {
        return $this->listOfBooks;
    }

    /**
     * @param array $listOfBooks
     */
    public function setListOfBooks(array $listOfBooks): void
    {
        $this->listOfBooks = $listOfBooks;
    }
}

class Book
{
    private $title;
    private $author;
    private $publisher;
    private $releaseDate;
    private $isbn;
    private $price;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $publisher
     * @param $releaseDate
     * @param $isbn
     * @param $price
     */
    public function __construct($title, $author, $publisher, $releaseDate, $isbn, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->releaseDate = $releaseDate;
        $this->isbn = $isbn;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

}

$num = intval(readline());

$bookLibrary = [];

for ($i = 0; $i < $num; $i++) {

    $tokens = explode(" ", readline());
    $title = $tokens[0];
    $author = $tokens[1];
    $publisher = $tokens[2];
    $releaseDate = $tokens[3];
    $isbn = $tokens[4];
    $price = floatval($tokens[5]);

    $book = new Book($title, $author, $publisher, $releaseDate, $isbn, $price);
    $bookLibrary[] = $book;
}

$library = [];

foreach ($bookLibrary as $item) {
    $author = $item->getAuthor();
    $price = $item->getPrice();

    if (!key_exists($author, $library)) {
        $library[$author] = 0;
    }
    $library[$author] += $price;
}

uksort($library, function ($a, $b) use ($library) {

    if ($library[$a] < $library[$b]) return 1;
    elseif ($library[$a] > $library[$b]) return -1;
    else return strcmp($a, $b);
});

foreach ($library as $key => $item) {

    echo $key . " -> " . sprintf("%0.2f", $item) . PHP_EOL;
}