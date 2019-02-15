<?php

defined('IN_SYSTEM') or die('Запрет доступа!');

class Controller {
	public $model;
	public $view;

	//будет вызываться при каждом создании нового объекта
	function __construct()
	{
		$this->view = new View();
	}
}
