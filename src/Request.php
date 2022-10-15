<?php

namespace Abad0\BibliotecaDePeliculas;

use Abad0\BibliotecaDePeliculas\Response;

class Request 
{
    public function get ($route, $view) {
        $response = new Response();
        $response->response($route, $view);
    }

    public function post($request) {
        return $request;
    }
}