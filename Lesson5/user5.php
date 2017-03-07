<?php

function __autoload($class) {
    require "inc/" . $class . ".php";
}


function outputHeaderTemplate(User $currentUser) {
    echo "<p>Hello there, " . $currentUser->getHandle() . "</p>\n";
}


$user = new User();
$user->title = "Ms";
$user->name = "Doe";

outputHeaderTemplate($user);

