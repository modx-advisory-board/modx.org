<?php

namespace MODXorg\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class Home extends Base
{
    public function get(Request $request, Response $response, array $args = array())
    {
        $this->initialize($request, $response, $args);
        return $this->render('home.twig');
    }
}