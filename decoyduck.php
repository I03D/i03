<?php
require_once 'duck.php';
require_once 'mutequack.php';
require_once 'nowayfly.php';
class DecoyDuck extends Duck {

	public function __construct() {
		$this->quackBehavior = new MuteQuack();
		$this->flyBehavior = new FlyNoWay();
	}

	public function display() {
		echo 'Я утка-приманка (Decoy Duck)<br>';
	}
}
?> 