<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', \MODXorg\Controllers\Home::class . ':get')->setName('home');
