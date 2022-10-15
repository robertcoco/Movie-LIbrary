<?php
namespace Abad0\BibliotecaDePeliculas;

require_once __DIR__ .  "/../vendor/autoload.php";

class Route 
{   
    public static  $routes = [];

    public function Home() 
    {
        echo file_get_contents("../src/views/home.html");
        die();
    }
    public function render($route, $view) 
    {   
        array_push(Route::$routes, $route);
        if (in_array($_SERVER['REQUEST_URI'], [$route])) 
        {
            echo file_get_contents("../src/views/{$view}");
            exit(0);
        }    
         else 
        {       
            foreach(Route::$routes as $element) {
                if ($element !== $route) {
                    echo file_get_contents("../src/views/notFound.php");
                    break;
                }
                
            }
        }

    }  
}