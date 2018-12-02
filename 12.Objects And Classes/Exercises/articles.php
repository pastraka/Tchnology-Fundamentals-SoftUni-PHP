<?php

class Article
{
    private $title, $content, $author;

    /**
     * Article constructor.
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

$input = readline();
$num = intval(readline());
$line = explode(", ", $input);
$title = $line[0];
$content = $line[1];
$author = $line[2];
$article = new Article($title, $content, $author);

for ($i = 0; $i < $num; $i++) {

    $tokens = explode(": ", readline());
    $command = $tokens[0];
    $toDo = $tokens[1];
    switch ($command) {
        case "Edit":
            $article->setContent($toDo);
            break;
        case "ChangeAuthor":
            $article->setAuthor($toDo);
            break;
        case "Rename":
            $article->setTitle($toDo);
            break;
    }
}

echo $article;
