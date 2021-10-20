<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __dir__.'/vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello Slim App");

    return $response;
});
$app->run();

