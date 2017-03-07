<?php

function outputHeaderTemplate($currentUser) {
    echo "<p>Hello there, " . $currentUser->getHandle() . "</p>\n";
}

class User {
    public $name;
    public $title;

    public function getHandle() {
        return $this->title . " " . $this->name;
    }
}


class Guest extends User {
    public function getHandle() {
        return "Guest";
    }
}

$user = new Guest();

outputHeaderTemplate($user);

