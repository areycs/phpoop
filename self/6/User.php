<?php

function outputHeaderTemplate(User $currentUser) {
	echo "<p>Hello there, " . $currentUser->getFormattedHandle() . "</p>\n";
}

function __autoload($class) {
	require "inc/" . $class . ".php";
}

$user= new Moderator();
$user->setTitle("Mr");
$user->setName("Bloggs");

$guest = new Guest();

outputHeaderTemplate($user);