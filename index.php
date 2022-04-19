<?php
require_once 'mallardduck.php';
require_once 'redheadduck.php';
require_once 'rubberduck.php';
require_once 'decoyduck.php';
require_once 'modelduck.php';

$duck1 = new MallardDuck();
$duck1->display();
$duck1->performQuack();
$duck1->performFly();
$duck1->swim();
echo '<hr><br>';

$duck2 = new RedHeadDuck();
$duck2->display();
$duck2->performQuack();
$duck2->performFly();
$duck2->swim();
echo '<hr><br>';

$duck3 = new RubberDuck();
$duck3->display();
$duck3->performQuack();
$duck3->performFly();
$duck3->swim();
echo '<hr><br>';

$duck4 = new DecoyDuck();
$duck4->display();
$duck4->performQuack();
$duck4->performFly();
$duck4->swim();
echo '<hr><br>';

$duck5 = new ModelDuck();
$duck5->display();
$duck5->performQuack();
$duck5->performFly();
$duck5->setFlyBehavior(new FlyRocket());
$duck5->performFly();
$duck5->swim();
echo '<hr><br>';

?>

