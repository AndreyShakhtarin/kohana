<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: krion
 * Date: 01.12.16
 * Time: 10:48
 */

class Controller_Page extends Controller_Template {

    // Определяем шаблон по умолчанию
    public $template = 'main';

    public function action_about()
    {
        $content = View::factory('/pages/about');
        $this->template->title = 'О сайте';
        $this->template->description = 'Страница о сайте';
        $this->template->content = $content;
    }

} // End Page