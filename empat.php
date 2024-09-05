<?php

class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        if ($type === 'short') {
            return ['name' => $this->name];
        } elseif ($type === 'full') {
            return ['name' => $this->name, 'description' => $this->description];
        }
        return [];
    }
}


class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN === $ISBN) {
            return $this->showAll();
        }
        return [];
    }
}


class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}


$author = new Author("J.K. Rowling", "Penulis seri Harry Potter");
$publisher = new Publisher("Bloomsbury", "London, UK", "123456789");
$book = new Book(123456789, "Harry Potter and the Philosopher's Stone", "Buku pertama dari seri Harry Potter", "Fantasy", "English", 223, $author->name, $publisher->name);

print_r($book->showAll());
