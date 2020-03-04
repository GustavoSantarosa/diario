<?php 

require __DIR__ . "/vendor/autoload.php";

use CoffeCode\Router\Router;

$router = new Router(URL_BASE);

/*
*Controllers
*/
$router->namespace("Source\App");


/*
*Web
*home
*/
$router->group(null);
$router->get("/", "Web:home");

/*
*ERRORS
*/
$router->group("ooops");
$router->get("/{errcode}", "Web:error");

$router->dispatch();

if($router->redirect("/ooops/{$router->error()}"));