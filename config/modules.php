<?php

$url;               // здесь хранится url, введённый пользователем
$cleanURL;          // здесь хранится очищенный от ?name и прочего url
$path;              // здесь хранится массив из очищенного url
$module;            // здесь хранится название модуля
$moduleName;        // здесь хранится название модуля
$moduleFilename;    // здесь хранится путь к файлу модуля
$action;            // здесь хранится название вложенной страницы
$function;          // здесь хранится название функции, которая будет рендерить шаблоны

$url = $_SERVER['REQUEST_URI'];

if ($cleanURL = stristr($url, '?', true)) {
    $path = explode('/', $cleanURL);
}
else {
    $path = explode('/', $url);
}

if (count($path) < 4) {
    $moduleName = empty($path[1]) ? 'main' : $path[1];
    $action = empty($path[2]) ? 'index' : $path[2];

    $moduleFilename = MODULES . 'main.php';
    $function = $moduleName . '_' . $action;
}
else {
    $module = empty($path[1]) ? 'main' : $path[1];
    $moduleName = empty($path[2]) ? 'main' : $path[2];
    $action = empty($path[3]) ? 'index' : $path[3];

    $moduleFilename = MODULES . $module . '.php';
    $moduleName = str_replace('-', '', $moduleName);
    $function = $module . '_' . $moduleName . '_' . $action;
}

if (file_exists($moduleFilename)) {
    require_once $moduleFilename;

    if (function_exists($function)) {
        $function();
    }
    else {
        echo render('navigation.php');
        echo render('404.php');
    }
}
else {
    echo render('navigation.php');
    echo render('404.php');
}