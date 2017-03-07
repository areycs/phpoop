<?php

function outputHeaderTemplate(User $currentUser) {
	echo "<p>Hello there, " . $currentUser->getHandle() . "</p>\n";
}

function __autoload($class) {
	require "inc/" . $class . ".php";
}

$user= new User();
$user->title = "Mr";
$user->name = "Bloggs";

$guest = new Guest();

outputHeaderTemplate($guest);