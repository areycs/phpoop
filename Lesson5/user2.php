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

$user = new User();
$user->title = "Mr";
$user->name = "Bloggs";

outputHeaderTemplate($user);

