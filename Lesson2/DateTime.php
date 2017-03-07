<?php

$date = new DateTime();
var_dump($date);

$millenium = new DateTime("1st January 2000");
var_dump($millenium);

echo $millenium->format("jS F") . "\n";

