<?php
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