<?php

function outputHeaderTemplate(User $currentUser) {
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


class Moderator extends User {
    public function banUser() {
        // ban code goes here
    }
}

$user = new Moderator();
$user->title = "Ms";
$user->name = "Doe";

outputHeaderTemplate($user);

