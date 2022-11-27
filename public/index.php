<?php

use Bascodefr\Cafe\Router\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$router = new Router();

$router

    ->get('/', 'index', "home")
    ->post("/", "index", "home_post")

    ->run();