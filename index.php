<?php
    include("core/db_connect.php");
    include("core/router.php");

    include("model/{$model}.php");

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
    echo $headertpl->render($data);   

    $tpl = $mustache->loadTemplate($template); // get $template from router
    echo $tpl->render($data); 

    $footertpl = $mustache->loadTemplate('footer'); // loads __DIR__.'/views/foo.mustache';
    echo $footertpl->render($data);   


    $con->close();
?>