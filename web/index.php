<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new \Silex\Application;

$app->get("/", function(){
    $num = 10;
    $generator = new \mheap\Fibonacci;
    $output = implode(", ", $generator->generate($num));
    return 'Fibonacci with input "'.$num.'" is: '.$output;
});

$app->run();
