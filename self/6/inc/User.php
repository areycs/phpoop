<?php

class User {
	protected $name;
	protected $title;

	protected function getHandle() {
		return $this->title . " " . $this->name;
	}

	public function getFormattedHandle() {
		return $this->getHandle();
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setTitle($title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}
}

?>