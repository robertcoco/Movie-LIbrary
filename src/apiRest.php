<?php
require_once __DIR__ . "/../vendor/autoload.php";


if (in_array($_SERVER['REQUEST_URI'], ['index.html', '/', ''])) 
{
    echo file_get_contents('../src/views/home.php');
    die();
}