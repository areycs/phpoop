<?php

class Robot{
    public $name;
}

$marvin = new Robot();
$marvin->name = "Marvin the Paranoid Android";

echo "My name is" . $marvin->name;

$marvin->colour = "Angry grey";
