<?php
//
///**
// * Даёт возможность последовательно обходить элементы составных объектов, не раскрывая их внутреннего представления.
// */
//class Book
//{
//    /**
//     * @var string
//     */
//
//    private string $title;
//    /**
//     * @var string
//     */
//    private string $author;
//
//    /**
//     * @param string $title
//     * @param string $author
//     */
//    public function __construct(string $title, string $author)
//    {
//        $this->title = $title;
//        $this->author = $author;
//    }
//
//    /**
//     * @return string
//     */
//    public function getAuthor(): string
//    {
//        return $this->author;
//    }
//
//    /**
//     * @return string
//     */
//    public function getTitle(): string
//    {
//        return $this->title;
//    }
//
//    /**
//     * @return string
//     */
//    public function getAuthorAndTitle(): string
//    {
//        return $this->getTitle() . ' by ' . $this->getAuthor();
//    }
//}
//
//class BookList implements Countable, Iterator
//{
//    /**
//     * @var Book[]
//     */
//    private array $books = array();
//    /**
//     * @var int
//     */
//    private int $currentIndex = 0;
//
//    /**
//     * @param Book $book
//     * @return void
//     */
//    public function addBook(Book $book): void
//    {
//        $this->books[] = $book;
//    }
//
//    /**
//     * @param Book $bookToRemove
//     * @return void
//     */
//    public function removeBook(Book $bookToRemove): void
//    {
//        foreach ($this->books as $key => $book) {
//            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
//                unset($this->books[$key]);
//            }
//        }
//
//        $this->books = array_values($this->books);
//    }
//
//    /**
//     * @return int
//     */
//    public function count(): int
//    {
//        return count($this->books);
//    }
//
//    /**
//     * @return Book
//     */
//    public function current(): Book
//    {
//        return $this->books[$this->currentIndex];
//    }
//
//    /**
//     * @return int
//     */
//    public function key(): int
//    {
//        return $this->currentIndex;
//    }
//
//    /**
//     * @return void
//     */
//    public function next(): void
//    {
//        $this->currentIndex++;
//    }
//
//    /**
//     * @return void
//     */
//    public function rewind(): void
//    {
//        $this->currentIndex = 0;
//    }
//
//    /**
//     * @return bool
//     */
//    public function valid(): bool
//    {
//        return isset($this->books[$this->currentIndex]);
//    }
//}
//
//$book = new Book('Master and Margarita', 'M. Bulgakov');
//var_dump($book->getTitle());
//var_dump($book->getAuthor());
//var_dump($book->getAuthorAndTitle());
//
//$book1 = new Book("Dog's heart", 'M. Bulgakov');
//$book2 = new Book('Idiot', 'F.Dostoevsky');
//$book3 = new Book('Crime and Punishment', 'F. Dostoevsky');
//
//$iter = new BookList();
//$iter->addBook($book);
//$iter->addBook($book1);
//$iter->addBook($book2);
//$iter->addBook($book3);
//var_dump($iter->count());
//var_dump($iter->current());
//$iter->next();
//$iter->removeBook($book1);
//var_dump($iter->current());
//var_dump($iter->valid());
