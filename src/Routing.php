<?php

require_once __DIR__ . "/../vendor/autoload.php";
use Abad0\BibliotecaDePeliculas\Request;

$route = new Request();

$route->get("/favorito", "favorites.php"); 
$route->get("/home", "home.php");