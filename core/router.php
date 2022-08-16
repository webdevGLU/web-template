<?php

$view = '';
if(!empty($_GET['view'])){
    $view = mes($_GET['view']);
    $view = str_replace("/","",$view);
}

switch($view){
    case '':
        $template = "main";
        $model = "main";
        break;
    case 'products':
        $template = "products";
        $model = "products";
        break;
    
    default:
        $template = "404";
        $model = "404";
        break;
}