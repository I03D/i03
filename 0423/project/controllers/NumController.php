<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class NumController extends Controller
	{
		public function actt($params) // , $second)
		{
			// var_dump($params);
			echo 'Сумма равна ' . array_sum($params) . '.';
		}
	}
?>