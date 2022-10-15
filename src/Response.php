<?php 

namespace Abad0\BibliotecaDePeliculas;

use Abad0\BibliotecaDePeliculas\Route;

class Response extends Route
{
    public function response($route, $view) {
        $router = new Route();
        $router->render($route, $view);
    }
}