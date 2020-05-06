<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Slim\App;

return function (App $app, ContainerInterface $container): void {
    $app->addErrorMiddleware($container->get('config')['debug'], true, true);
};
