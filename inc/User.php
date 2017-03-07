<?php

class User {
    public $name;
    public $title;

    public function getHandle() {
        return $this->title . " " . $this->name;
    }
}


