<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Hello;
	
	class HelloController extends Controller
	{
		public function show1()
		{
			echo 'Тест 1';
		}
		
		public function show2()
		{
			echo 'Тест 2';
			
		}
		public function index() {
			$this->title = 'Фреймворк работает!';
			
			$hello = new Hello; // тестовая модель для проверки базы
			
			return $this->render('hello/index');
		}
	}
