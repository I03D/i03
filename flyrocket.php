<?php
require_once 'flybehaviour.php';
class FlyRocket implements FlyBehavior {
	public function fly() {
		echo 'Утка взлетела на реактивной тяге!<br>';
	}
}
?> 