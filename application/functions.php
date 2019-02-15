<?php

defined('IN_SYSTEM') or die('Запрет доступа!');

//чистим строку
function safe_array($array) {
    if(!is_array($array)) {
        $array = preg_replace('/[^a-zA-Z0-9]/', '', $array);
        return $array;
    }
    else {
        return FALSE;
    }
}

//подключаем файл
function autoload($file) {
    if (!strstr($file, '.php')) $file .= '.php';
    $path = ROOT.'application/'.$file;
    if (file_exists($path)) {
        include_once $path;
        return TRUE;
    }
    else {
        return FALSE;
    }
}