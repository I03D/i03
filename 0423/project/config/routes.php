<?php
	use \Core\Route;
	
	return [
		new Route('/my-page1/', 'test', 'act1'),
		new Route('/my-page2/', 'test', 'act2'),
		new Route('/my-page3/', 'test', 'act3'),
		new Route('/summa/:n1/:n2/:n3/', 'num', 'actt'),
		new Route('/page/:id/', 'page', 'show'),
		new Route('/user/:id/', 'user', 'show'),
		new Route('/testact/', 'page', 'act')
	];	
?>