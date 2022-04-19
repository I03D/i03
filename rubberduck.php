<?php
require_once 'duck.php';
require_once 'squeak.php';
require_once 'nowayfly.php';
class RubberDuck extends Duck {

	public function __construct() {
		$this->quackBehavior = new Squeak();
		$this->flyBehavior = new FlyNoWay();
	}

	public function display() {
		echo 'Я резиновая утка (Rubber Duck)<br>';
	}
}
?> 