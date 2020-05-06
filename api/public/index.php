<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
   $response->getBody()->write('{}');
   return $response->withHeader('Content-Type', 'application/json');
});

$app->run();

