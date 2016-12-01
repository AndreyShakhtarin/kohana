<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public $template = 'main';

	public function action_index()
	{
		// Создаем глобальные переменные Вида
		View::set_global('title', 'Работаем с Контроллером Шаблонов');
		View::set_global('description', 'Учимся передавать данные в шаблоны');

		$content = View::factory('welcome');

		// Передаем данные в шаблон welcome.php
		$content->age = 'больше 18';
		$content->name = 'Васька';

		// Выводим основной шаблон
		$this->template->content = (string)$content;
	}

} // End Welcome
