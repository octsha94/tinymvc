<?php

//абсолютный путь директория файла
defined('ROOT') or define('ROOT', str_replace('\\', '/', realpath(dirname(__FILE__))).'/');

//системная переменная
define('IN_SYSTEM', TRUE);

//стартуем или возобновляем сессию
session_name('sid');
session_start();

require_once ('application/functions.php');

//чистим GET-массив
$_GET = array_map('safe_array', $_GET);

//подключаем файлы ядра
autoload('ini_set');
autoload('core/controller');
autoload('core/model');
autoload('core/view');
autoload('core/route');

//запускаем маршрутизатор
Route::start();
