<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    $data = [
        'name' => $request->getAttribute('name'),
    ];
    // Render index view
    return $this->view->render($response, 'home.twig', $data);
});
