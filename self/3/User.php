<?php

class User {
	public $name;
	public $title;

	public function getHandle() {
		return $this->title . " " . $this->name;
	}
}

$cat = new User();

$cat->title = "Sir";
$cat->name = "Fluffiness";

echo "I am " . $cat->getHandle();

?>
