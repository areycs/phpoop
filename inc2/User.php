<?php

class User {
    protected $name;
    protected $title;

    public function getHandle() {
        return $this->title . " " . $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
}



