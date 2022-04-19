<?php
abstract class Duck {
	protected $quackBehavior;
	protected $flyBehavior;
	
	public function swim() {
		echo 'Буль-буль, утка плавает<br>';
	}
	
	abstract public function display();
	
	public function performQuack() {
		$this->quackBehavior->quack();
	}
	
	public function performFly() {
		$this->flyBehavior->fly();
	}

	public function setFlyBehavior(FlyBehavior $fb) {
        $this->flyBehavior = $fb;
    }

	public function setQuackBehavior(QuackBehavior $qb) {
        $this->quackBehavior = $qb;
    }
} 
?> 