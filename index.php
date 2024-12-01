<?php

require __DIR__ . '/autoload.php';

use \App\Models\Article;

$view = new \App\View();
$view->articles = \App\Models\Article::findAll();

$view->display(__DIR__ . '/templates/index.php');

//foreach ($view->articles as $key => $value) {
//    var_dump($key, $value);
//    echo '<br>';
//}