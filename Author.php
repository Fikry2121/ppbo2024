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
            return ['named' => $this->name];
        } elseif ($type === 'full') {
            return ['named' => $this->name, 'description' => $this->description];
        }
        return [];
    }
}