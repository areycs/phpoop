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
		// ban user
	}
}

$user= new User();
$user->title = "Mr";
$user->name = "Bloggs";

$guest = new Guest();

outputHeaderTemplate($guest);