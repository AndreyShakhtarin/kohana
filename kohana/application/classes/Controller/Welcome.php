<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	//подгружаемый файл конфигурации application/config/main.php
	public $template = 'main';

	public function action_index()
	{
		// Биндим глобально переменую для всех шаблонов View, контролера Controller_Welcome
		View::bind_global('title', $title);
		// Присваиваем значение забинденой переменной
		$title = 'Работаем с Контроллером Шаблонов';
		// Создаем глобальную переменную $description
		View::set_global('description', 'Учимся передавать данные в шаблоны');
		// Указываем путь к файлу welcome.php
		$content = View::factory('welcome');

		// Передаем данные в шаблон welcome.php (локальные переменые для файла)
		$content->age = 'больше 18';
		$content->name = 'Васька';

		//Подгружаем данные из конфигураций mysite.php
		$site_config = Kohana::$config->load('mysite');
		$comm = $site_config->get('comment');
		View::bind_global('comment', $comm);
		$content->comment = $comm;

		// Передаем данные в шаблон public $template = 'main'; (т.е. в шаблон main.php)
		//p.s. для коректной передачи назначаем тип (string)
		$this->template->content = (string)$content;
	}

} // End Welcome
