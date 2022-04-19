<?php
require_once 'duck.php';
require_once 'quack.php';
require_once 'flyrocket.php';
class ModelDuck extends Duck {

	public function __construct() {
		$this->quackBehavior = new Quackk();
		$this->flyBehavior = new FlyNoWay();
	}

	public function display() {
		echo 'Я тестирую ракету (Model Duck)<br>';
	}
}
?> 