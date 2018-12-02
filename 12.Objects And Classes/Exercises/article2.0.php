<?php

class ListOfArticles
{
    private $title, $content, $author;

    /**
     * ListOfArticles constructor.
     * @param $title
     * @param $content
     * @param $author
     */
    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
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

    public function __toString()
    {
        return $this->getTitle() . " - " . $this->getContent() . ": " . $this->getAuthor() . PHP_EOL;
    }

}

$num = intval(readline());

$arr = [];
for ($i = 0; $i < $num; $i++) {

    $input = readline();
    $tokens = explode(", ", $input);
    $title = $tokens[0];
    $content = $tokens[1];
    $author = $tokens[2];
    $article = new ListOfArticles($title, $content, $author);
    $arr[] = $article;
}
$command = readline();

usort($arr, function (ListOfArticles $a, ListOfArticles $b) use ($arr, $command) {
    if ($command == "title") {
        return $a->getTitle() <=> $b->getTitle();
    } elseif ($command == "content") {
        return $a->getContent() <=> $b->getContent();
    } elseif ($command == "author") {
        return $a->getAuthor() <=> $b->getAuthor();
    }
});

foreach ($arr as $item) {

    echo $item;
}
