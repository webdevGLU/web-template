<?php
    include('core/db_connect.php');

    $view = '';
    if(!empty($_GET['view'])){
        $view = mes($_GET['view']);
        $view = str_replace("/","",$view);
    }

    switch($view){
        case '':
            $template = "main";
            break;
        case 'products':
            $template = "products";
            break;
      
        default:
            $template = "main";
            break;
    }

    $model = [
        "name" => "Yolo Baggins",
        "title" => "I'm Title",
        "permalink" => "blog/",
        "foo" => "bar",
        "article" => [
            "title" => "My Article Title"
        ],
        "posts" => [
            [
                "title" => "Post #1",
                "id" => 1,
                "content" => "Content"
            ],
            [
                "title" => "Post 2",
                "id" => 2,
                "content" => "Content"
            ]
        ]
    ];


    //render mustache templates 
    $mustache = new Mustache_Engine(array(
        'template_class_prefix' => '__MyTemplates_',
        'cache' => dirname(__FILE__).'/tmp/cache/mustache',
        'cache_file_mode' => 0666, // Please, configure your umask instead of doing this :)
        'cache_lambda_templates' => true,
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views'),
        'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views/partials'),
        'helpers' => array('i18n' => function($text) {
            // do something translatey here...
        }),
        'escape' => function($value) {
            return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
        },
        'charset' => 'ISO-8859-1',
        'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
        'strict_callables' => true,
        'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
    ));

    // echo $m->render('Hello, {{planet}}!', array('planet' => 'World')); // "Hello, World!"

    $headertpl = $mustache->loadTemplate('header'); // loads __DIR__.'/views/foo.mustache';
    echo $headertpl->render($model);   

    $tpl = $mustache->loadTemplate($template); // get $template from router
    echo $tpl->render($model); 

    $footertpl = $mustache->loadTemplate('footer'); // loads __DIR__.'/views/foo.mustache';
    echo $footertpl->render($model);   


    $con->close();
?>