<?php

include __DIR__ . '/../vendor/autoload.php';

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Application();

$app->get('/hello', function () use ($app) {
    error_log("GET /hello");
    sleep(2); // emulate slow process
    return $app->json(['method' => 'GET', 'response' => 'OK']);
});

$app->after(function (Request $request, Response $response) {
    $response->headers->set('Access-Control-Allow-Origin', '*');
});

$app->run();