<?php

defined('IN_SYSTEM') or die('Запрет доступа!');

class View
{
	/*
	$content_file - контент страницы
	$template_file - общий для всех страниц представление
	$data - массив, содержащий элементы контента страницы
	*/
	function generate($content_view, $template_view, $data = null)
	{
		

		if(is_array($data)) {
			//импорт переменных из массива
			extract($data);
		}

        include_once 'application/views/'.$template_view;
	}
}
